<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PendaftaranBansos;
use Phpml\Clustering\KMeans;
use Phpml\Clustering\HierarchicalClustering;

class PenrimaBansosController extends Controller
{

    public function index()
    {
        return view('penerimaBansos.index');
    }

    public function filter(Request $request)
    {
        $data = PendaftaranBansos::all()->toArray();
        
        $targetCount = $request->input('targetCount');

        $samples = array_map(function($item) {
            return [$item['pendapatan'], $item['jumlah_tanggungan']];
        }, $data);

        // Langkah 1: K-Means Clustering
        $kmeans = new KMeans(5); // Jumlah cluster sesuai kebutuhan awal
        $clustersKMeans = $kmeans->cluster($samples);

        // Pilih cluster dengan pendapatan rata-rata terendah
        $selectedCluster = $this->selectCluster($clustersKMeans, $samples);

        // Langkah 2: Hierarchical Clustering pada data dari cluster terpilih
        $selectedSamples = array_map(function($index) use ($samples) {
            return $samples[$index];
        }, $selectedCluster);

        $hierarchical = new HierarchicalClustering();
        $clustersHierarchical = $hierarchical->cluster($selectedSamples);

        // Eliminasi data berulang hingga mencapai jumlah target
        $finalData = $this->eliminateData($clustersHierarchical, $selectedCluster, $targetCount);

        return view('bansos.index', compact('finalData', 'data'));
    }

    private function selectCluster($clusters, $samples)
    {
        // Pilih cluster dengan pendapatan rata-rata terendah
        $clusterAverages = array_map(function($cluster) use ($samples) {
            $total = array_sum(array_map(function($index) use ($samples) {
                return $samples[$index][0];
            }, $cluster));
            return $total / count($cluster);
        }, $clusters);

        $minIndex = array_search(min($clusterAverages), $clusterAverages);
        return $clusters[$minIndex];
    }

    private function eliminateData($clusters, $selectedCluster, $targetCount)
    {
        $flattened = array_merge(...$clusters);
        return array_slice($flattened, 0, $targetCount);
    }
}
