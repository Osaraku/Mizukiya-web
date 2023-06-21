<?php

namespace App\Http\Controllers;

use App\Models\Promo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PromoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (auth()->check() && Auth::user()->is_admin == 1) {
            return view('admin.promo', [
                "promos" => Promo::latest()->get()
            ]);
        } else {
            return view('promo', [
                "promos" => Promo::latest()->get()
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.promo_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate(
            [
                'judul' => 'required|max:50',
                'deskripsi' => 'required|max:100',
                'awal_promo' => 'required',
                'akhir_promo' => 'required',
                'image' => 'image'
            ]
        );

        $validatedData['image'] = $request->file('image')->store('promo-images');

        Promo::create($validatedData);

        return redirect("/admin/promo")->with('success', 'Promo berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Promo $promo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Promo $promo)
    {
        return view('admin.promo_update', [
            'promo' => $promo
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Promo $promo)
    {
        $validatedData = $request->validate(
            [
                'judul' => 'required|max:50',
                'deskripsi' => 'required|max:100',
                'awal_promo' => 'required',
                'akhir_promo' => 'required',
                'image' => 'image'
            ]
        );

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('promo-images');
        }

        Promo::where('id', $promo->id)
            ->update($validatedData);

        return redirect("/admin/promo")->with('success', 'Promo berhasil di update!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Promo $promo)
    {
        if ($promo->image) {
            Storage::delete($promo->image);
        }
        Promo::destroy($promo->id);

        return redirect("/admin/promo")->with('success', 'Promo berhasil dihapus');
    }
}