@extends('layouts.template')

@section('content')
<div class="container">
  <h2 class="mb-4" style="color: #03fec8">Kelola Akun Pengguna</h2>
  <a href="{{ route('user.create') }}" class="btn btn-warning mb-3">Tambah Pengguna</a>

  @if (session('success'))
    <div class="alert alert-success">
      {{ session('success') }}
    </div>
  @endif

  <table class="table table-striped table-bordered table-hover">
    <thead class="table-dark">
      <tr>
        <th>Nama</th>
        <th>Email</th>
        <th>Role</th>
        <th class="text-center">Mau Diapain?</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users as $user)
      <tr>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->role }}</td>
        <td class="d-flex justify-content-center">
          <a href="{{ route('user.edit', $user->id) }}" class="btn btn-primary me-3">Edit</a>
          <form action="{{ route('user.delete', $user->id) }}" method="POST" class="d-inline">
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

<style>
    /* Style for the table */
    .table {
        color: #333;
        background-color: #f8f9fa;
    }
    .table-dark th {
        background-color: #0457e8;
        color: white;
    }

    /* Hover effect for buttons */
    .btn-primary, .btn-danger, .btn-warning {
        transition: background-color 0.3s ease, font-size 0.3s ease;
    }
    .btn-primary:hover {
        background-color: #03fec8; /* Matches navbar hover effect */
        color: black;
        font-size: 1.1rem;
    }
    .btn-danger:hover {
        background-color: #ff5757;
        font-size: 1.1rem;
    }
    .btn-warning:hover {
        background-color: #ffd700;
        font-size: 1.1rem;
    }
</style>
@endsection
