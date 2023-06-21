<?php

namespace App\Http\Controllers;

use App\Models\Posisi;
use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (auth()->check() && Auth::user()->is_admin == 1) {
            return view('admin.dashboard', [
                "staffs" => Staff::all()
            ]);
        } else {
            return view('/');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.staff_create', [
            'posisis' => Posisi::All()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate(
            [
                'nama' => 'required|max:100',
                'kelamin' => 'required',
                'phone' => 'required',
                'alamat' => 'required',
                'id_posisi' => 'required',
                'image' => 'image'
            ]
        );

        $validatedData['image'] = $request->file('image')->store('staff-images');

        Staff::create($validatedData);

        return redirect("/admin/dashboard")->with('success', 'Staff berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Staff $staff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Staff $staff)
    {
        return view('admin.staff_update', [
            'staff' => $staff,
            'posisis' => Posisi::All()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Staff $staff)
    {
        $validatedData = $request->validate(
            [
                'nama' => 'required|max:100',
                'kelamin' => 'required',
                'phone' => 'required',
                'alamat' => 'required',
                'id_posisi' => 'required',
                'image' => 'image'
            ]
        );

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('staff-images');
        }

        Staff::where('id', $staff->id)
            ->update($validatedData);

        return redirect("/admin/dashboard")->with('success', 'Staff berhasil di update!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Staff $staff)
    {
        if ($staff->image) {
            Storage::delete($staff->image);
        }
        Staff::destroy($staff->id);

        return redirect("/admin/dashboard")->with('success', 'Staff berhasil dihapus');
    }
}