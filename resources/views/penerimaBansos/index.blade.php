@extends('dashboard.layouts.app')
@section('content')
<div class="d-flex justify-content-between align-items-center">
    <div class="d-flex flex-column mb-3">
        <span class="fs-3"> Penerima Bansos </span>
        <small class="text-secondary"> Menu </small>    
    </div>

    <div class="card">
        taruh sesuatu disini kalau mau, kalau engga ya...hapus
    </div>
</div>
    <div class="input-group mb-3 w-25">
        <input type="text" name="" id="" class="form-control">
        <button class="btn btn-dark">
            <i class="bx bx-search"></i>
        </button>
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
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
