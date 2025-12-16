<?php

namespace App\Http\Controllers;

use App\Models\BuahImpor;
use Illuminate\Http\Request;

class BuahImporController extends Controller
{
    public function index()
    {
        $buahImpor = BuahImpor::where('is_active', true)
                              ->orderBy('nama', 'asc')
                              ->get();
        
        return view('buah-impor', compact('buahImpor'));
    }

    public function show($id)
    {
        $buah = BuahImpor::findOrFail($id);
        return view('buah-impor-detail', compact('buah'));
    }

    // ===== ADMIN METHODS =====
    
    public function adminIndex()
    {
        $buahImpor = BuahImpor::orderBy('created_at', 'desc')->get();
        return view('admin.buah-impor.index', compact('buahImpor'));
    }

    public function create()
    {
        return view('admin.buah-impor.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'harga' => 'required|numeric|min:0',
            'satuan' => 'required|string',
            'stok' => 'required|integer|min:0',
            'negara_asal' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            $validated['gambar'] = $request->file('gambar')->store('buah-impor', 'public');
        }

        BuahImpor::create($validated);

        return redirect()->route('admin.buah-impor.index')
                        ->with('success', 'Buah impor berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $buah = BuahImpor::findOrFail($id);
        return view('admin.buah-impor.edit', compact('buah'));
    }

    public function update(Request $request, $id)
    {
        $buah = BuahImpor::findOrFail($id);

        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'harga' => 'required|numeric|min:0',
            'satuan' => 'required|string',
            'stok' => 'required|integer|min:0',
            'negara_asal' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            $validated['gambar'] = $request->file('gambar')->store('buah-impor', 'public');
        }

        $buah->update($validated);

        return redirect()->route('admin.buah-impor.index')
                        ->with('success', 'Buah impor berhasil diupdate!');
    }

    public function destroy($id)
    {
        $buah = BuahImpor::findOrFail($id);
        $buah->delete();

        return redirect()->route('admin.buah-impor.index')
                        ->with('success', 'Buah impor berhasil dihapus!');
    }

    public function toggleStatus($id)
    {
        $buah = BuahImpor::findOrFail($id);
        $buah->update(['is_active' => !$buah->is_active]);

        return redirect()->back()
                        ->with('success', 'Status berhasil diubah!');
    }
}
