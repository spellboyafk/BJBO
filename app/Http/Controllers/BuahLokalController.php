<?php

namespace App\Http\Controllers;

use App\Models\BuahLokal;
use Illuminate\Http\Request;

class BuahLokalController extends Controller
{
    public function index(Request $request)
    {
        $query = BuahLokal::where('is_active', true);

        // FITUR SEARCH
        if ($request->has('search') && $request->search != '') {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('nama', 'like', '%' . $search . '%')
                  ->orWhere('deskripsi', 'like', '%' . $search . '%');
            });
        }

        // FILTER HARGA
        if ($request->has('harga_min') && $request->harga_min != '') {
            $query->where('harga', '>=', $request->harga_min);
        }

        if ($request->has('harga_max') && $request->harga_max != '') {
            $query->where('harga', '<=', $request->harga_max);
        }

        // FILTER DISKON
        if ($request->has('diskon') && $request->diskon == '1') {
            $query->where('diskon_persen', '>', 0);
        }

        // FILTER STOK
        if ($request->has('stok') && $request->stok != '') {
            if ($request->stok == 'tersedia') {
                $query->where('stok', '>', 0);
            } elseif ($request->stok == 'habis') {
                $query->where('stok', '=', 0);
            }
        }

        // SORTING
        $sort = $request->get('sort', 'newest');
        switch ($sort) {
            case 'price_asc':
                $query->orderBy('harga', 'asc');
                break;
            case 'price_desc':
                $query->orderBy('harga', 'desc');
                break;
            case 'name_asc':
                $query->orderBy('nama', 'asc');
                break;
            case 'name_desc':
                $query->orderBy('nama', 'desc');
                break;
            case 'discount':
                $query->orderBy('diskon_persen', 'desc');
                break;
            case 'newest':
            default:
                $query->orderBy('created_at', 'desc');
                break;
        }

        // PAGINATION
        $buahLokals = $query->paginate(12)->withQueryString();
        
        return view('buah-lokal', compact('buahLokals'));
    }

    public function show($id)
    {
        $buah = BuahLokal::findOrFail($id);
        return view('buah-lokal-detail', compact('buah'));
    }
}
