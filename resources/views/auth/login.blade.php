@extends('layouts.blank')
@section('content')
    <style>
        @media(max-width: 992px) {
            .card {
                width: 100%;
            }
        }

        @media(min-width: 992px) {
            .card {
                width: 30%;
            }
        }

        main {
            background-color: #000000;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100%25' height='100%25' viewBox='0 0 1600 800'%3E%3Cg fill-opacity='0.08'%3E%3Cpolygon fill='%23032324' points='800 100 0 200 0 800 1600 800 1600 200'/%3E%3Cpolygon fill='%23064749' points='800 200 0 400 0 800 1600 800 1600 400'/%3E%3Cpolygon fill='%23096a6d' points='800 300 0 600 0 800 1600 800 1600 600'/%3E%3Cpolygon fill='%230b8d92' points='1600 800 800 400 0 800'/%3E%3Cpolygon fill='%230eb0b6' points='1280 800 800 500 320 800'/%3E%3Cpolygon fill='%2311d4db' points='533.3 800 1066.7 800 800 600'/%3E%3Cpolygon fill='%2325E7EE' points='684.1 800 914.3 800 800 700'/%3E%3C/g%3E%3C/svg%3E");
            background-attachment: fixed;
            background-size: cover;
        }

        input.form-control {
            border: 0;
            border-bottom: 1px solid #fff;
            border-radius: 0;
        }

        input.form-control:focus {
            box-shadow: none;
        }
    </style>
    <main>
        @if (session()->has('failed'))
            <div class="alert alert-danger alert-dismissible fade show position-fixed top-0 right-0" style="z-index: 88"
                role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                {{ session()->get('failed') }}
            </div>
        @endif

        <script>
            var alertList = document.querySelectorAll(".alert");
            alertList.forEach(function(alert) {
                new bootstrap.Alert(alert);
            });
        </script>

        <form action="{{ route('ceklogin') }}" method="post">
            <div class="d-flex justify-content-start z-10" style="height: 100vh">
                <div class="card rounded-2 text-white h-100" style="backdrop-filter: blur(6px); background: #b8b8b818">
                    <div class="card-body">
                        <div class="d-flex flex-column justify-content-center gap-2 h-100">
                            <span class="fw-bold fs-2 text-center">
                                E - BANSOS
                            </span>
                            @csrf
                            <div class="d-flex flex-column gap-2">
                                <label for="email"> Email </label>
                                <input type="text" name="email" id="username"
                                    class="form-control bg-transparent text-white">
                                @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="d-flex flex-column gap-2">
                                <label for="password"> Password </label>
                                <input type="password" name="password" id="password"
                                    class="form-control bg-transparent text-white">
                                @error('password')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-outline-light mt-2">
                                Login
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </main>
@endsection
