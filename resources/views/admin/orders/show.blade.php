@extends('layouts.app')

@section('title', 'Detail Order')

@section('content')

<div class="card mb-3">
  <div class="card-header">
    <h5>Order #{{ $order->id }}</h5>
  </div>

  <div class="card-body">
    <p><strong>Customer:</strong> {{ $order->user->name }}</p>
    <p><strong>Status:</strong> {{ ucfirst($order->status) }}</p>
    <p><strong>Total:</strong> Rp {{ number_format($order->total,0,',','.') }}</p>
  </div>
</div>

<div class="card">
  <div class="card-header">
    <h5>Order Items</h5>
  </div>

  <div class="card-body">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Produk</th>
          <th>Harga</th>
          <th>Qty</th>
          <th>Subtotal</th>
        </tr>
      </thead>
      <tbody>
        @foreach($order->items as $item)
        <tr>
          <td>{{ $item->product->name }}</td>
          <td>Rp {{ number_format($item->price,0,',','.') }}</td>
          <td>{{ $item->quantity }}</td>
          <td>
            Rp {{ number_format($item->price * $item->quantity,0,',','.') }}
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

@endsection
