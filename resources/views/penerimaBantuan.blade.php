@include('loaders/css')
@include('component/menu')
<!-- ======= Hero Section ======= -->
<div class="d-flex justify-content-between align-items-center">
    <div class="d-flex flex-column mb-3">
        <span class="fs-3"> Penerima Bansos </span>
        <small class="text-secondary"> Menu </small>
    </div>
</div>
<div class="input-group mb-3 w-25">
    <a href="{{ route('home') }}" class="btn btn-dark">
        Back
    </a>
</div>
<div class="card">
    <div class="card-header text-center">
        <span class="fs-3">Penerima Bansos</span>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Pendapatan</th>
                    <th scope="col">Tanggungan</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($finalData as $item)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $item['nama'] }}</td>
                        <td>{{ money_format_idr($item['pendapatan']) }}</td>
                        <td>{{ $item['jumlah_tanggungan'] }}</td>
                    </tr>
                @empty
                    <tr>
                        <th colspan="3" scope="row">Data Tidak ada</th>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@include('modal/modal-search')
@include('loaders/js')
