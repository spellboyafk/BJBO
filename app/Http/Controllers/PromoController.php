<?php

namespace App\Http\Controllers;

use App\Models\Promo;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PromoController extends Controller
{
    // Public: Tampilkan semua promo aktif
 public function index()
{
    $promos = Promo::where('is_active', true)->get();
    return view('promo', compact('promos'));
}


    // Public: Validasi kode promo (untuk checkout)
    public function validate(Request $request)
    {
        $request->validate([
            'kode_promo' => 'required|string',
            'total_belanja' => 'required|numeric|min:0'
        ]);

        $promo = Promo::where('kode_promo', strtoupper($request->kode_promo))->first();

        if (!$promo) {
            return response()->json([
                'success' => false,
                'message' => 'Kode promo tidak ditemukan'
            ], 404);
        }

        if (!$promo->isValid()) {
            return response()->json([
                'success' => false,
                'message' => 'Promo tidak valid atau sudah berakhir'
            ], 400);
        }

        if ($request->total_belanja < $promo->min_pembelian) {
            return response()->json([
                'success' => false,
                'message' => 'Minimal pembelian Rp ' . number_format($promo->min_pembelian, 0, ',', '.')
            ], 400);
        }

        $diskon = $promo->hitungDiskon($request->total_belanja);

        return response()->json([
            'success' => true,
            'message' => 'Kode promo berhasil diterapkan',
            'data' => [
                'kode_promo' => $promo->kode_promo,
                'judul' => $promo->judul,
                'diskon' => $diskon,
                'total_setelah_diskon' => $request->total_belanja - $diskon
            ]
        ]);
    }

    // Admin: List semua promo
    public function adminIndex(Request $request)
    {
        $query = Promo::query();

        if ($request->has('search') && $request->search != '') {
            $query->search($request->search);
        }

        if ($request->has('status')) {
            if ($request->status == 'active') {
                $query->active();
            } elseif ($request->status == 'inactive') {
                $query->where('is_active', false);
            }
        }

        $promos = $query->orderBy('created_at', 'desc')->paginate(20);
        
        return view('admin.promo.index', compact('promos'));
    }

    // Admin: Form tambah promo
    public function create()
    {
        return view('admin.promo.create');
    }

    // Admin: Simpan promo baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'kode_promo' => 'required|string|max:50|unique:promos,kode_promo',
            'tipe_diskon' => 'required|in:persentase,nominal',
            'nilai_diskon' => 'required|numeric|min:0',
            'min_pembelian' => 'required|numeric|min:0',
            'max_diskon' => 'nullable|numeric|min:0',
            'kuota' => 'nullable|integer|min:1',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date|after_or_equal:tanggal_mulai',
            'banner' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'is_active' => 'boolean'
        ], [
            'judul.required' => 'Judul promo wajib diisi',
            'kode_promo.required' => 'Kode promo wajib diisi',
            'kode_promo.unique' => 'Kode promo sudah digunakan',
            'tipe_diskon.required' => 'Tipe diskon wajib dipilih',
            'nilai_diskon.required' => 'Nilai diskon wajib diisi',
            'tanggal_selesai.after_or_equal' => 'Tanggal selesai harus setelah tanggal mulai',
        ]);

        // Upload banner jika ada
        if ($request->hasFile('banner')) {
            $file = $request->file('banner');
            $filename = time() . '_' . Str::slug($request->judul) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images/promo'), $filename);
            $validated['banner'] = 'images/promo/' . $filename;
        }

        // Uppercase kode promo
        $validated['kode_promo'] = strtoupper($validated['kode_promo']);
        $validated['is_active'] = $request->has('is_active') ? true : false;

        Promo::create($validated);

        return redirect()->route('admin.promo.index')
            ->with('success', 'Promo berhasil ditambahkan!');
    }

    // Admin: Form edit promo
    public function edit($id)
    {
        $promo = Promo::findOrFail($id);
        return view('admin.promo.edit', compact('promo'));
    }

    // Admin: Update promo
    public function update(Request $request, $id)
    {
        $promo = Promo::findOrFail($id);

        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'kode_promo' => 'required|string|max:50|unique:promos,kode_promo,' . $id,
            'tipe_diskon' => 'required|in:persentase,nominal',
            'nilai_diskon' => 'required|numeric|min:0',
            'min_pembelian' => 'required|numeric|min:0',
            'max_diskon' => 'nullable|numeric|min:0',
            'kuota' => 'nullable|integer|min:1',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date|after_or_equal:tanggal_mulai',
            'banner' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'is_active' => 'boolean'
        ]);

        // Upload banner baru jika ada
        if ($request->hasFile('banner')) {
            // Hapus banner lama
            if ($promo->banner && file_exists(public_path($promo->banner))) {
                unlink(public_path($promo->banner));
            }

            $file = $request->file('banner');
            $filename = time() . '_' . Str::slug($request->judul) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images/promo'), $filename);
            $validated['banner'] = 'images/promo/' . $filename;
        }

        $validated['kode_promo'] = strtoupper($validated['kode_promo']);
        $validated['is_active'] = $request->has('is_active') ? true : false;

        $promo->update($validated);

        return redirect()->route('admin.promo.index')
            ->with('success', 'Promo berhasil diupdate!');
    }

    // Admin: Hapus promo
    public function destroy($id)
    {
        $promo = Promo::findOrFail($id);

        // Hapus banner
        if ($promo->banner && file_exists(public_path($promo->banner))) {
            unlink(public_path($promo->banner));
        }

        $promo->delete();

        return redirect()->route('admin.promo.index')
            ->with('success', 'Promo berhasil dihapus!');
    }

    // Admin: Toggle status
    public function toggleStatus($id)
    {
        $promo = Promo::findOrFail($id);
        $promo->update(['is_active' => !$promo->is_active]);

        return redirect()->back()
            ->with('success', 'Status promo berhasil diubah!');
    }
}
