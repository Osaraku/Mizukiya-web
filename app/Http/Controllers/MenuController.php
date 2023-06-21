<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (auth()->check() && Auth::user()->is_admin == 1) {
            return view('admin.menu', [
                "menus" => Menu::all()
            ]);
        } else {
            return view('menu', [
                "menus" => Menu::all()
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.menu_create', [
            'categories' => Category::All()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate(
            [
                'nama' => 'required|max:50',
                'deskripsi' => 'required|max:100',
                'id_kategori' => 'required',
                'harga' => 'required',
                'image' => 'image'
            ]
        );

        $validatedData['image'] = $request->file('image')->store('menu-images');

        Menu::create($validatedData);

        return redirect("/admin/menu")->with('success', 'Menu berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menu $menu)
    {
        return view('admin.menu_update', [
            'menu' => $menu,
            'categories' => Category::All()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Menu $menu)
    {
        $validatedData = $request->validate(
            [
                'nama' => 'required|max:50',
                'deskripsi' => 'required|max:100',
                'id_kategori' => 'required',
                'harga' => 'required',
                'image' => 'image'
            ]
        );

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('menu-images');
        }

        Menu::where('id', $menu->id)
            ->update($validatedData);

        return redirect("/admin/menu")->with('success', 'Menu berhasil di update!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu)
    {
        if ($menu->image) {
            Storage::delete($menu->image);
        }
        Menu::destroy($menu->id);

        return redirect("/admin/menu")->with('success', 'Menu berhasil dihapus');
    }
}