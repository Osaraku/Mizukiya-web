<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\CartItem;
use Illuminate\Http\Request;

class KeranjangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cart = Cart::where('status', 'active')
            ->where('user_id', auth()->user()->id)
            ->first();

        $items = $cart->items()->where('status', 'active')->get();

        return view('keranjang', [
            'cart' => $cart,
            'items' => $items
        ]);

        // todo 
        // sambungkan ke view lalu passing variable cart juga items
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $payment_method = data_get(collect($request->input())->flip(), 'on');

        $payment_method = match ($payment_method) {
            'cod' => 'COD',
            'transfer_bank' => 'Transfer Bank',
            'retail' => 'Retail'
        };

        $user = auth()->user();
        $cart = Cart::where('status', 'active')
            ->where('user_id', auth()->user()->id)
            ->first();

        $items = $cart->items()->where('status', 'active')->get();

        $menu = [];

        foreach ($items as $item) {
            $menu[] = $item->product_name;
        }

        Order::query()
            ->create([
                'nama' => $request->input('nama'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'alamat' => $request->input('alamat'),
                'menu' => $menu,
                'total' => $cart->total + 10000,
                'pembayaran' => $payment_method
            ]);

        return redirect('/menu');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = CartItem::find($id);

        $item->delete();

        return redirect("/keranjang")->with('success', 'Item berhasil dihapus');
    }
}