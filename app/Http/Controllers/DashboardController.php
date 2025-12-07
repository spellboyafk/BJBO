<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\Order;      // ganti kalau modelmu bernama Transaction
use App\Models\OrderItem;  // item pesanan (pivot)
use App\Models\Product;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        // tanggal hari ini
        $today = Carbon::today();

        // 1. Transaksi hari ini (jumlah order dibuat hari ini)
        $transaksiHariIni = Order::whereDate('created_at', $today)->count();

        // 2. Pendapatan hari ini (jumlah total; asumsi kolom 'total' dan status 'paid')
        $pendapatan = Order::whereDate('created_at', $today)
                           ->where('status', 'paid')
                           ->sum('total');

        // 3. Produk terlaris (berdasarkan qty terjual, lihat OrderItem)
        $topProduct = OrderItem::select('product_id', DB::raw('SUM(qty) as total_qty'))
                        ->groupBy('product_id')
                        ->orderByDesc('total_qty')
                        ->limit(1)
                        ->first();

        if ($topProduct) {
            $produkTerlaris = Product::find($topProduct->product_id)->name ?? 'Unknown';
        } else {
            $produkTerlaris = null;
        }

        // 4. Pembeli baru hari ini (asumsi User punya kolom 'role' atau gunakan filter lain)
        $pembeliBaru = User::whereDate('created_at', $today)
                           ->where('role', 'buyer') // jika tidak pakai role, sesuaikan
                           ->count();

        // 5. Stok rendah — threshold 10 (sesuaikan)
        $stokRendah = Product::where('stock', '<', 10)
                             ->orderBy('stock', 'asc')
                             ->get();

        // 6. Status Pesanan
        $pending = Order::where('status', 'pending')->count();
        $dikirim = Order::where('status', 'shipped')->count();
        $gagal   = Order::whereIn('status', ['cancelled', 'failed', 'returned'])->count();

        return view('dashboard', compact(
            'transaksiHariIni',
            'pendapatan',
            'produkTerlaris',
            'pembeliBaru',
            'stokRendah',
            'pending',
            'dikirim',
            'gagal'
        ));
    }
}
