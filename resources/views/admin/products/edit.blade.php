@extends('layouts.app')

@section('title', 'Edit Produk')

@section('content')
<div class="card">
  <div class="card-body">
    <form method="POST" action="{{ route('products.update', $product->id) }}">
      @csrf
      @method('PUT')

      <div class="mb-3">
        <label>Nama Produk</label>
        <input type="text" name="name" class="form-control"
               value="{{ $product->name }}" required>
      </div>

      <div class="mb-3">
        <label>Harga</label>
        <input type="number" name="price" class="form-control"
               value="{{ $product->price }}" required>
      </div>

      <div class="mb-3">
        <label>Stok</label>
        <input type="number" name="stock" class="form-control"
               value="{{ $product->stock }}" required>
      </div>

      <button class="btn btn-primary">Update</button>
      <a href="{{ route('products.index') }}" class="btn btn-secondary">Batal</a>
    </form>
  </div>
</div>
@endsection
