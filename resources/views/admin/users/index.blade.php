@extends('layouts.app')

@section('title', 'Users')

@section('content')

@if(session('success'))
  <div class="alert alert-success">
    {{ session('success') }}
  </div>
@endif

<div class="card">
  <div class="card-header d-flex justify-content-between">
    <h5>Daftar Users</h5>
    <a href="{{ route('users.create') }}" class="btn btn-primary">
      + Tambah User
    </a>
  </div>

  <div class="card-body">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>#</th>
          <th>Nama</th>
          <th>Email</th>
          <th width="20%">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach($users as $user)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $user->name }}</td>
          <td>{{ $user->email }}</td>
          <td>
            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-warning">
              Edit
            </a>

            <form action="{{ route('users.destroy', $user->id) }}"
                  method="POST"
                  class="d-inline"
                  onsubmit="return confirm('Hapus user ini?')">
              @csrf
              @method('DELETE')
              <button class="btn btn-sm btn-danger">
                Hapus
              </button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

@endsection
