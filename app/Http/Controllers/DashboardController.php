<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\User;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        // 1. Transaksi hari ini
        $transaksiHariIni = Order::whereDate('created_at', Carbon::today())->count();

        // 2. Total pendapatan (paid)
        $pendapatan = Order::where('status', 'paid')->sum('total');

        // 3. Produk terlaris (ambil nama produk secara aman)
        $produkTerlarisRow = OrderItem::selectRaw('product_id, SUM(qty) as total_qty')
            ->groupBy('product_id')
            ->orderByDesc('total_qty')
            ->with('product')
            ->first();

        $produkTerlaris = optional(optional($produkTerlarisRow)->product)->name ?? '-';

        // 4. Pembeli baru hari ini
        $pembeliBaru = User::whereDate('created_at', Carbon::today())->count();

        // 5. Stok rendah
        $stokRendah = Product::where('stock', '<=', 5)->get();

        // 6. Status pesanan
        $pending = Order::where('status', 'pending')->count();
        $dikirim = Order::where('status', 'shipped')->count();
        $gagal   = Order::where('status', 'failed')->count();

        // 7. Pesanan terbaru (INI yang bikin view kamu error kalau belum ada)
        $pesananTerbaru = Order::latest()->take(8)->get();

        // 8. Data chart pendapatan 7 hari terakhir (opsional)
        $revenueLabels = [];
        $revenueSeries = [];

        for ($i = 6; $i >= 0; $i--) {
            $date = Carbon::today()->subDays($i);
            $revenueLabels[] = $date->format('d M');

            $revenueSeries[] = (int) Order::where('status', 'paid')
                ->whereDate('created_at', $date)
                ->sum('total');
        }

        return view('admin.dashboard', compact(
            'transaksiHariIni',
            'pendapatan',
            'produkTerlaris',
            'pembeliBaru',
            'stokRendah',
            'pending',
            'dikirim',
            'gagal',
            'pesananTerbaru',
            'revenueLabels',
            'revenueSeries'
        ));
    }
}
