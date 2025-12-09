<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Order;
use App\Models\OrderItem;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        // 1. Transaksi hari ini
        $transaksiHariIni = Order::whereDate('created_at', Carbon::today())->count();

        // 2. Total pendapatan
        $pendapatan = Order::where('status', 'paid')->sum('total');

        // 3. Produk terlaris
        $produkTerlaris = OrderItem::selectRaw('product_id, SUM(qty) as total')
            ->groupBy('product_id')
            ->orderByDesc('total')
            ->with('product')
            ->first();

        $produkTerlarisNama = $produkTerlaris ? $produkTerlaris->product->name : '-';

        // 4. Pembeli baru hari ini
        $pembeliBaru = \App\Models\User::whereDate('created_at', Carbon::today())->count();

        // 5. Stok rendah
        $stokRendah = Product::where('stock', '<=', 5)->get();

        // 6. Status pesanan
        $pending = Order::where('status', 'pending')->count();
        $dikirim = Order::where('status', 'shipped')->count();
        $gagal = Order::where('status', 'failed')->count();

        return view('admin.dashboard', [
            'transaksiHariIni' => $transaksiHariIni,
            'pendapatan' => $pendapatan,
            'produkTerlaris' => $produkTerlarisNama,
            'pembeliBaru' => $pembeliBaru,
            'stokRendah' => $stokRendah,
            'pending' => $pending,
            'dikirim' => $dikirim,
            'gagal' => $gagal,
        ]);
    }
}
