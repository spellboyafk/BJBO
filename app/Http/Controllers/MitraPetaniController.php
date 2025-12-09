<?php

namespace App\Http\Controllers;

use App\Models\MitraPetani;
use Illuminate\Http\Request;

class MitraPetaniController extends Controller
{
    // Tampilkan form pendaftaran
    public function create()
    {
        return view('mitra-petani');
    }

    // Simpan data pendaftaran
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'email' => 'required|email|unique:mitra_petanis,email',
            'no_telepon' => 'required|string|max:20',
            'no_ktp' => 'required|string|size:16|unique:mitra_petanis,no_ktp',
            'provinsi' => 'required|string',
            'alamat_lahan' => 'required|string',
            'luas_lahan' => 'required|integer|min:1000',
            'jenis_buah' => 'required|string',
            'kapasitas_produksi' => 'required|integer|min:100',
            'nama_bank' => 'required|string',
            'no_rekening' => 'required|string|max:30',
            'atas_nama_rekening' => 'required|string|max:255',
        ], [
            'nama_lengkap.required' => 'Nama lengkap wajib diisi',
            'email.required' => 'Email wajib diisi',
            'email.unique' => 'Email sudah terdaftar',
            'no_ktp.size' => 'No KTP harus 16 digit',
            'no_ktp.unique' => 'No KTP sudah terdaftar',
            'luas_lahan.min' => 'Luas lahan minimal 1000 m²',
            'kapasitas_produksi.min' => 'Kapasitas produksi minimal 100 kg/bulan',
        ]);

        MitraPetani::create($validated);

        return redirect()->route('mitra.petani')
            ->with('success', 'Pendaftaran berhasil! Kami akan menghubungi Anda dalam 1-3 hari kerja.');
    }

    // Admin: Lihat semua pendaftaran
    public function index()
    {
        $mitra = MitraPetani::orderBy('created_at', 'desc')->paginate(20);
        return view('admin.mitra-petani.index', compact('mitra'));
    }

    // Admin: Detail mitra
    public function show($id)
    {
        $mitra = MitraPetani::findOrFail($id);
        return view('admin.mitra-petani.show', compact('mitra'));
    }

    // Admin: Update status
    public function updateStatus(Request $request, $id)
    {
        $validated = $request->validate([
            'status' => 'required|in:pending,approved,rejected',
            'catatan_admin' => 'nullable|string',
        ]);

        $mitra = MitraPetani::findOrFail($id);
        $mitra->update($validated);

        if ($validated['status'] === 'approved') {
            $mitra->update(['tanggal_bergabung' => now()]);
        }

        return redirect()->back()
            ->with('success', 'Status berhasil diupdate!');
    }
}
