@extends('layouts.app')

@section('title', 'Tambah Produk')

@section('content')
<div class="card">
  <div class="card-body">
    <form method="POST" action="{{ route('products.store') }}">
      @csrf

      <div class="mb-3">
        <label>Nama Produk</label>
        <input type="text" name="name" class="form-control" required>
      </div>

      <div class="mb-3">
        <label>Harga</label>
        <input type="number" name="price" class="form-control" required>
      </div>

      <div class="mb-3">
        <label>Stok</label>
        <input type="number" name="stock" class="form-control" required>
      </div>

      <button class="btn btn-primary">Simpan</button>
      <a href="{{ route('products.index') }}" class="btn btn-secondary">Batal</a>
    </form>
  </div>
</div>
@endsection
