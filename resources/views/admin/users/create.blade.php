@extends('layouts.app')

@section('title', 'Tambah User')

@section('content')

<div class="card">
  <div class="card-header">
    <h5>Tambah User</h5>
  </div>

  <div class="card-body">
    <form action="{{ route('users.store') }}" method="POST">
      @csrf

      <div class="mb-3">
        <label class="form-label">Nama</label>
        <input type="text"
               name="name"
               class="form-control @error('name') is-invalid @enderror"
               value="{{ old('name') }}">
        @error('name')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>

      <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email"
               name="email"
               class="form-control @error('email') is-invalid @enderror"
               value="{{ old('email') }}">
        @error('email')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>

      <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password"
               name="password"
               class="form-control @error('password') is-invalid @enderror">
        @error('password')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>

      <div class="d-flex justify-content-end">
        <a href="{{ route('users.index') }}" class="btn btn-secondary me-2">
          Batal
        </a>
        <button class="btn btn-primary">
          Simpan
        </button>
      </div>
    </form>
  </div>
</div>

@endsection
