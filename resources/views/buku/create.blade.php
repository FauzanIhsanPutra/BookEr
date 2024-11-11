@extends('layouts.template')

@section('content')
    
    <form action="{{ route('buku.store') }}" method="POST" class="card p-5 shadow-lg border-0" style="background-color: #f7fafc; border-radius: 10px;">
        @csrf
            @if(Session::get('success'))
                <div class="alert alert-success"> {{Session::get('success') }}</div>
            @endif
            @if($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <div class="mb-3 row">
                <label for="name" class="col-sm-2 col-form-label text-dark fw-bold">Nama Buku</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-lg shadow-sm" id="name" name="title" style="border-color: #0457e8;">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="author" class="col-sm-2 col-form-label text-dark fw-bold">Author Buku</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-lg shadow-sm" id="author" name="author" style="border-color: #0457e8;">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="type" class="col-sm-2 col-form-label text-dark fw-bold">Jenis Buku :</label>
                <div class="col-sm-10">
                    <select class="form-select form-select-lg shadow-sm" id="type" name="type" style="border-color: #0457e8;">
                        <option selected disabled hidden>Pilih</option>
                        <option value="novel">Novel</option>
                        <option value="cerpen">Cerpen</option>
                        <option value="ensiklopedia">Ensiklopedia</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="price" class="col-sm-2 col-form-label text-dark fw-bold">Tentukan harganya :</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control form-control-lg shadow-sm" id="price" name="price" style="border-color: #0457e8;">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="stock" class="col-sm-2 col-form-label text-dark fw-bold">Stock Yang Ingin ditambahkan :</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control form-control-lg shadow-sm" id="stock" name="stock" style="border-color: #0457e8;">
                </div>
            </div>
            <button type="submit" class="btn btn-lg btn-primary mt-3 w-100" style="background: linear-gradient(45deg, #5908ae, #0457e8, #00cffd, #00ff73); border: none; transition: all 0.3s ease; font-weight: bold;">
                Tambah Data
            </button>
    </form>

    <style>
        /* Button hover styling to match navbar link hover effect */
        .btn-primary:hover {
            background-color: aqua !important; /* Matches navbar link hover background */
            color: black !important;
            font-size: 1.1rem; /* Slightly increases font size on hover */
            transition: all 0.3s ease;
        }
    </style>

@endsection
