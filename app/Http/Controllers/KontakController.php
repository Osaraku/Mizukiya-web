<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (auth()->check() && Auth::user()->is_admin == 1) {
            return view('admin.pesan', [
                "kontaks" => Kontak::latest()->get()
            ]);
        } else {
            return view('kontak');
        }
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
        $validatedData = $request->validate(
            [
                'name' => 'required|max:255',
                'email' => 'required|email:dns',
                'subjek' => 'required',
                'pesan' => 'required'
            ]
        );

        Kontak::create($validatedData);

        return redirect("/kontak")->with('success', 'Pesan Terkirim!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kontak $kontak)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kontak $kontak)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kontak $kontak)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kontak $kontak)
    {
        //
    }
}