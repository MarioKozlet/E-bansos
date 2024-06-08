<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PendaftaranBansos;
use Phpml\Clustering\KMeans;

class PenrimaBansosController extends Controller
{

    public function index()
    {
        // Ambil semua data dari tabel penerima_bansos
        $data = PendaftaranBansos::all()->toArray();

        // Tetapkan jumlah penerima bansos yang diinginkan
        $targetCount = 50; // Sesuaikan dengan kebutuhan

        // Siapkan data untuk clustering dengan mengkonversi string ke numerik
        $samples = array_map(function($item) {
            return [floatval($item['pendapatan']), intval($item['jumlah_tanggungan'])];
        }, $data);

        // Langkah 1: K-Means Clustering
        $kmeans = new KMeans(5); // Sesuaikan jumlah cluster awal
        $clustersKMeans = $kmeans->cluster($samples);

        // Pilih cluster dengan pendapatan rata-rata terendah
        $selectedCluster = $this->selectCluster($clustersKMeans, $samples);

        // Langkah 2: Simulasi Hierarchical Clustering pada data dari cluster terpilih
        // Dalam hal ini, kita cukup melakukan pemilihan manual
        $selectedSamples = array_map(function($index) use ($samples) {
            return $samples[intval($index)];
        }, array_keys($selectedCluster));

        // Sortir berdasarkan pendapatan (misalkan ascending) untuk eliminasi
        usort($selectedSamples, function ($a, $b) {
            return $a[0] <=> $b[0];
        });

        // Ambil data dengan jumlah sesuai targetCount
        $finalDataIndices = array_slice(array_keys($selectedCluster), 0, $targetCount);
        $finalData = array_map(function ($index) use ($data) {
            return $data[$index];
        }, $finalDataIndices);

        // Kirim data yang difilter ke view
        return view('penerimaBansos.index', compact('finalData', 'data'));
    }

    private function selectCluster($clusters, $samples)
    {
        // Pilih cluster dengan pendapatan rata-rata terendah
        $clusterAverages = array_map(function($cluster) use ($samples) {
            $total = array_sum(array_map(function($index) use ($samples) {
                return $samples[intval($index)][0];
            }, array_keys($cluster)));
            return $total / count($cluster);
        }, $clusters);

        $minIndex = array_search(min($clusterAverages), $clusterAverages);

        return $clusters[$minIndex];
    }

    private function eliminateData($clusters, $selectedCluster, $targetCount)
    {
        // Gabungkan semua cluster dan ambil data yang diinginkan
        $flattened = array_merge(...$clusters);
        return array_slice($flattened, 0, $targetCount);
    }

}
