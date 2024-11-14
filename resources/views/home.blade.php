@extends('layouts.template')

@section('content')
    <div class="jumbotron py-4 px-5">
        @if (Session::get('failed'))
            <div class="alert alert-danger">{{ Session::get('failed') }}</div>
        @endif
        <h1 class="display-4 text-white">
            Selamat datang di <span style="color: #ff0000; font-weight: bold;">Book</span><span style="color: #76ffc1; font-weight: bold;">Er</span>!
        </h1>
        <p class="lead text-white">Platform manajemen buku Anda untuk kemudahan pengelolaan data buku dan akun. </p>
    </div>

    <div class="container mt-4">
        <div class="row">

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

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-info text-white">
                        <h5>Kelola Akun</h5>
                    </div>
                    <div class="card-body text-center">
                        <p class="card-text">Atur akun pengguna untuk mengakses platform dengan berbagai peran dan hak akses.</p>
                        <a href="{{ route('user.index')}}" class="btn btn-info">Kelola Akun</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<style>
    
    .btn {
        transition: all 0.3s ease-in-out; 
    }

    .btn:hover {
    transform: scale(1.1); 
    background-color: #91ff00; 
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.4); 
    color: #000;
    transition: transform 0.1s, background-color 0.1s ease-in-out, box-shadow 0.1s ease-in-out, color 0.1s ease-in-out;
}
</style>
