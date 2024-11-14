@extends('layouts.template')

@section('content')
    <style>
        /* Navbar styling */
        .navbar {
            background: linear-gradient(45deg, #5908ae, #0457e8, #00cffd, #00ff73);
            color: black;
        }
        .navbar-brand, .nav-link {
            color: white !important;
            transition: color 0.3s ease-in-out;
        }
        .nav-link:hover {
            color: #03fec8 !important;
            font-size: 1.2rem;
            font-weight: bold;
            background-color: transparent;
            transition: color 0.3s, font-size 0.3s;
        }

        .dropdown-menu {
            background-color: #6a11cb;
            opacity: 0;
            transform: translateY(10px);
            visibility: hidden;
            transition: opacity 0.4s ease, transform 0.4s ease;
        }
        .dropdown-item:hover {
            background-color: #2575fc;
            color: #fff;
        }

        .navbar-toggler:hover {
            background-color: #6a11cb;
        }

        body {
            background: linear-gradient(135deg, #c1dfc4, #deecdd);
            min-height: 100vh;
            font-family: 'Arial', sans-serif;
        }

        .card {
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 30px;
        }

        .form-label {
            font-weight: bold;
            color: #444;
        }

        .form-control,
        .form-select {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: #4a90e2;
            box-shadow: 0 0 5px rgba(74, 144, 226, 0.5);
        }

        .btn-primary {
            background-color: #4a90e2;
            border: none;
            padding: 10px 20px;
            margin-top: 20px;
            width: 100%;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #357ab8;
        }

        table {
            width: 100%;
            margin-top: 30px;
            border-collapse: collapse;
            border-radius: 8px;
            overflow: hidden;
        }

        table th,
        table td {
            padding: 12px 20px;
            text-align: left;
            border: 1px solid #ddd;
        }

        table th {
            background-color: #0457e8;
            color: white;
            font-size: 1.1rem;
        }

        table tr:nth-child(even) {
            background-color: #f4f4f4;
        }

        table tr:hover {
            background-color: #ddd;
        }

        .alert {
            color: #d9534f;
            padding: 5px;
            font-size: 14px;
            margin-bottom: 20px;
            border-left: 4px solid #d9534f;
            background-color: #f8d7da;
        }
    </style>

    <div class="card p-5">
        <h2 class="text-center" style="color: #0457e8;">Edit Book Details</h2>

        <form action="{{ route('buku.update', $buku['id']) }}" method="POST">
            @csrf
            @method('PATCH')

            @if ($errors->any())
                <ul class="alert p-3">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <div class="mb-3 row">
                <label for="title" class="col-sm-4 col-form-label form-label">Judulnya deh : </label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="title" name="title" value="{{ $buku['title'] }}">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="author" class="col-sm-4 col-form-label form-label">Author : </label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="author" name="author" value="{{ $buku['author'] }}">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="stock" class="col-sm-4 col-form-label form-label">Mau nambah? (ngga juga gapapa):</label>
                <div class="col-sm-8">
                    <input type="number" class="form-control" id="stock" name="stock" value="{{ $buku['stock'] }}">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="type" class="col-sm-4 col-form-label form-label">Tipe bukunya (bukan tipemu ya):</label>
                <div class="col-sm-8">
                    <select class="form-select" name="type" id="type">
                        <option value="novel" {{ $buku['type'] == 'novel' ? 'selected' : '' }}>Novel</option>
                        <option value="cerpen" {{ $buku['type'] == 'cerpen' ? 'selected' : '' }}>Cerpen</option>
                        <option value="ensiklopedia" {{ $buku['type'] == 'ensiklopedia' ? 'selected' : '' }}>Ensiklopedia</option>
                    </select>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="price" class="col-sm-4 col-form-label form-label">Harga (lebih murah dari gramed plis):</label>
                <div class="col-sm-8">
                    <input type="number" class="form-control" id="price" name="price" value="{{ $buku['price'] }}">
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Update? ato ngga? kalo ngga pencet back aja</button>
        </form>
    </div>
@endsection
