@extends('layouts.app')

@section('title', 'Orders')

@section('content')

<div class="card">
  <div class="card-header">
    <h5>Daftar Order</h5>
  </div>

  <div class="card-body">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>#</th>
          <th>Customer</th>
          <th>Total</th>
          <th>Status</th>
          <th width="15%">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach($orders as $order)
        <tr>
          <td>#{{ $order->id }}</td>
          <td>{{ $order->user->name }}</td>
          <td>Rp {{ number_format($order->total,0,',','.') }}</td>
          <td>
            <span class="badge bg-info">
              {{ ucfirst($order->status) }}
            </span>
          </td>
          <td>
            <a href="{{ route('admin.orders.show', $order->id) }}"
               class="btn btn-sm btn-primary">
              Detail
            </a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

@endsection
