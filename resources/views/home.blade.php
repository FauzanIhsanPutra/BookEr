@extends('layouts.template')

@section('content')
    <div class="jumbotron py-4 px-5">
        @if (Session::get('failed'))
            <div class="alert alert-danger">{{ Session::get('failed') }}</div>
        @endif
        <h1 class="display-4 text-white">
            Selamat datang di <span style="color: #800000; font-weight: bold;">Book</span><span style="color: #2d6a4f; font-weight: bold;">Er</span>!
        </h1>
        <p class="lead text-white">Platform manajemen buku Anda untuk kemudahan pengelolaan data buku dan akun.</p>
    </div>

    <div class="container mt-4">
        <div class="row">
            <!-- Feature 1: Book List -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h5>Daftar Buku</h5>
                    </div>
                    <div class="card-body text-center">
                        <p class="card-text">Lihat daftar semua buku yang tersedia, termasuk informasi lengkap seperti penulis dan harga.</p>
                        <a href="{{ route('buku.index') }}" class="btn btn-primary">Lihat Buku</a>
                    </div>
                </div>
            </div>

            <!-- Feature 2: Add Book -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-success text-white">
                        <h5>Tambah Buku</h5>
                    </div>
                    <div class="card-body text-center">
                        <p class="card-text">Tambahkan buku baru ke database dengan mudah, termasuk judul, penulis, dan detail lainnya.</p>
                        <a href="{{ route('buku.create') }}" class="btn btn-success">Tambah Buku</a>
                    </div>
                </div>
            </div>

            <!-- Feature 3: Account Management -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-info text-white">
                        <h5>Kelola Akun</h5>
                    </div>
                    <div class="card-body text-center">
                        <p class="card-text">Atur akun pengguna untuk mengakses platform dengan berbagai peran dan hak akses.</p>
                        <a href="#" class="btn btn-info">Kelola Akun</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<style>
    /* Hover animation for buttons */
    .btn {
        transition: all 0.3s ease-in-out; /* Smooth transition for all properties */
    }

    .btn:hover {
        transform: scale(1.1); /* Slightly increase the button size */
        background-color: #91ff00; /* Change background color to gold */
        box-shadow: 0 4px 8px rgba(0.4, 0.4, 0.4, 0.4); /* Add a shadow effect */
        color: #000; /* Change text color to black for contrast */
    }
</style>
