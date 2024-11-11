@extends('layouts.template')

@section('content')

    @if(Session::get('success'))
        <div class="alert alert-success"> {{Session::get('success') }}</div>
    @endif
    @if(Session::get('deleted'))
        <div class="alert alert-warning"> {{Session::get('deleted') }}</div>
    @endif

    <div class="card p-5 mt-4">
        <h2 class="text-center" style="color: #0457e8;">Daftar Buku</h2>

        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Judul Buku</th>
                    <th>Author/Penulis</th>
                    <th>Stok</th>
                    <th>Harga Buku</th>
                    <th>Tipe Buku</th>
                    <th class="text-center">Mau Diapain??</th>
                </tr>
            </thead>
            <tbody>
                @foreach($bukus as $buku)
                    <tr>
                        <td>{{ $buku['title']}}</td>
                        <td>{{ $buku['author']}}</td>
                        <td>{{ $buku['stock']}}</td>
                        <td>{{ $buku['price']}}</td>
                        <td>{{ $buku['type']}}</td>
                        <td class="d-flex justify-content-center">
                            <a href="{{ route('buku.edit', $buku['id'])}}" class="btn btn-primary me-3">Edit</a>
                            <form action="{{ route('buku.delete', $buku['id'])}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection

<style>
    /* Table styling */
    table {
        width: 100%;
        margin-top: 30px;
        border-collapse: collapse;
        border-radius: 8px;
        overflow: hidden;
    }

    table th, table td {
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

    /* Card container */
    .card {
        background-color: #f9f9f9;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    /* Button styling */
    .btn-primary {
        background-color: #0457e8;
        border: none;
        padding: 10px 20px;
        margin-top: 10px;
        font-size: 16px;
        transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #357ab8;
    }

    .btn-danger {
        background-color: #d9534f;
        border: none;
        padding: 10px 20px;
        transition: background-color 0.3s ease;
    }

    .btn-danger:hover {
        background-color: #c9302c;
    }

    /* Alert styling */
    .alert {
        margin-bottom: 20px;
        font-size: 14px;
        padding: 10px;
    }

    .alert-success {
        background-color: #d4edda;
        color: #155724;
        border-left: 4px solid #28a745;
    }

    .alert-warning {
        background-color: #fff3cd;
        color: #856404;
        border-left: 4px solid #ffc107;
    }
</style>
