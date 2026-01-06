@extends('layouts.app')

@section('title', 'Products')

@section('content')

@if(session('success'))
  <div class="alert alert-success">
    {{ session('success') }}
  </div>
@endif

<div class="card">
  <div class="card-header d-flex justify-content-between align-items-center">
    <h5 class="mb-0">Product List</h5>
    <a href="{{ route('products.create') }}" class="btn btn-primary">
      + Add Product
    </a>
  </div>

  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered align-middle">
        <thead class="table-light">
          <tr>
            <th width="5%">#</th>
            <th>Name</th>
            <th>Price</th>
            <th>Stock</th>
            <th width="20%">Action</th>
          </tr>
        </thead>
        <tbody>
          @forelse($products as $product)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $product->name }}</td>
              <td>Rp {{ number_format($product->price, 0, ',', '.') }}</td>
              <td>{{ $product->stock }}</td>
              <td>
                <a href="{{ route('products.edit', $product->id) }}"
                   class="btn btn-sm btn-warning">
                  Edit
                </a>

                <form action="{{ route('products.destroy', $product->id) }}"
                      method="POST"
                      class="d-inline"
                      onsubmit="return confirm('Delete this product?')">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-sm btn-danger">
                    Delete
                  </button>
                </form>
              </td>
            </tr>
          @empty
            <tr>
              <td colspan="5" class="text-center text-muted">
                No products found
              </td>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>
</div>

@endsection
