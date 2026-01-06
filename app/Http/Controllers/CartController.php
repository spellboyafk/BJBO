<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class CartController extends Controller
{
    public function index()
    {
        $cartItems = Cart::where('user_id', Auth::id())->get();
        $total = $cartItems->sum('subtotal');
        
        return view('cart.index', compact('cartItems', 'total'));
    }

    public function add(Request $request)
{
    // DEBUG: Log detail request
    Log::info('=== CART ADD DEBUG ===');
    Log::info('User ID: ' . Auth::id());
    Log::info('User Email: ' . Auth::user()->email);
    Log::info('Request All:', $request->all());
    
    try {
        // Validasi input - UBAH price dari integer ke numeric
        $validated = $request->validate([
            'product_name' => 'required|string',
            'price' => 'required|numeric',  // ✅ UBAH INI
            'quantity' => 'required|integer|min:1',
            'product_image' => 'nullable|string',
        ]);

        Log::info('Validation Passed!');

        // Cek apakah produk sudah ada di cart
        $existingCart = Cart::where('user_id', Auth::id())
            ->where('product_name', $request->product_name)
            ->first();

        if ($existingCart) {
            // Update quantity jika sudah ada
            $existingCart->quantity += $request->quantity;
            $existingCart->subtotal = $existingCart->quantity * $existingCart->price;
            $existingCart->save();
            
            Log::info('Cart Updated:', $existingCart->toArray());
            return redirect()->back()->with('success', 'Jumlah produk di keranjang berhasil diupdate!');
        } else {
            // Tambah item baru - KONVERSI price ke integer
            $cart = Cart::create([
                'user_id' => Auth::id(),
                'product_name' => $request->product_name,
                'price' => (int) $request->price,  // ✅ TAMBAH (int)
                'quantity' => $request->quantity,
                'subtotal' => (int) $request->price * $request->quantity,  // ✅ TAMBAH (int)
                'product_image' => $request->product_image,
            ]);
            
            Log::info('Cart Created Successfully:', $cart->toArray());
            return redirect()->back()->with('success', 'Produk berhasil ditambahkan ke keranjang!');
        }
        
    } catch (\Illuminate\Validation\ValidationException $e) {
        Log::error('Validation Error:', $e->errors());
        return redirect()->back()->with('error', 'Data tidak valid: ' . json_encode($e->errors()));
        
    } catch (\Exception $e) {
        Log::error('Cart Add Error: ' . $e->getMessage());
        return redirect()->back()->with('error', 'Gagal menambahkan ke keranjang: ' . $e->getMessage());
    }
}


    public function update(Request $request, $id)
    {
        $cart = Cart::where('id', $id)
            ->where('user_id', Auth::id())
            ->firstOrFail();
        
        $cart->quantity = $request->quantity;
        $cart->subtotal = $cart->price * $request->quantity;
        $cart->save();

        return redirect()->back()->with('success', 'Jumlah produk berhasil diupdate!');
    }

    public function remove($id)
    {
        $cart = Cart::where('id', $id)
            ->where('user_id', Auth::id())
            ->firstOrFail();
        
        $cart->delete();

        return redirect()->back()->with('success', 'Produk berhasil dihapus dari keranjang!');
    }

    public function clear()
    {
        Cart::where('user_id', Auth::id())->delete();

        return redirect()->back()->with('success', 'Keranjang berhasil dikosongkan!');
    }
}
