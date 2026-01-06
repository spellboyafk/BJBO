@extends('layouts.app')

@section('title', 'Edit User')

@section('content')

<div class="card">
  <div class="card-header">
    <h5>Edit User</h5>
  </div>

  <div class="card-body">
    <form action="{{ route('users.update', $user->id) }}" method="POST">
      @csrf
      @method('PUT')

      <div class="mb-3">
        <label class="form-label">Nama</label>
        <input type="text"
               name="name"
               class="form-control @error('name') is-invalid @enderror"
               value="{{ old('name', $user->name) }}">
        @error('name')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>

      <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email"
               name="email"
               class="form-control @error('email') is-invalid @enderror"
               value="{{ old('email', $user->email) }}">
        @error('email')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>

    <div class="mb-3">
        <label class="form-label">Role</label>
        <select name="role"
                class="form-select @error('role') is-invalid @enderror">
            <option value="">-- Pilih Role --</option>
            <option value="admin" {{ old('role', $user->role) == 'admin' ? 'selected' : '' }}>
            Admin
            </option>
            <option value="customer" {{ old('role', $user->role) == 'customer' ? 'selected' : '' }}>
            Customer
            </option>
        </select>
        @error('role')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

      <div class="mb-3">
        <label class="form-label">
          Password <small class="text-muted">(kosongkan jika tidak diubah)</small>
        </label>
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
          Update
        </button>
      </div>
    </form>
  </div>
</div>

@endsection
