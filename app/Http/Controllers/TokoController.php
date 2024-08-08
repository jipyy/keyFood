<?php

namespace App\Http\Controllers;

use App\Models\Toko;
use Illuminate\Http\Request;

class TokoController extends Controller
{
    public function index()
    {
        $stores = Toko::all();
        return view('admin.stores.index', compact('stores'));
    }

    public function create() 
    {
        return view('admin.stores.create');  // Pastikan view ini ada di resources/views/admin/stores/create.blade.php
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_toko' => 'required|string|max:255',
            'alamat_toko' => 'required|string|max:255',
            'foto_profile_toko' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $store = new Toko();
        $store->nama_toko = $request->input('nama_toko');
        $store->alamat_toko = $request->input('alamat_toko');

        if ($request->hasFile('foto_profile_toko')) {
            $image = $request->file('foto_profile_toko');
            $imagePath = $image->store('public/store_images');
            $store->foto_profile_toko = basename($imagePath);
        }

        $store->save();

        return redirect()->route('admin.stores.index')->with('success', 'Toko created successfully');
    }

    public function edit($id)
    {
        $store = Toko::findOrFail($id);
        return view('admin.stores.edit', compact('store'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_toko' => 'required|string|max:255',
            'alamat_toko' => 'required|string|max:255',
            'foto_profile_toko' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $store = Toko::findOrFail($id);
        $store->nama_toko = $request->input('nama_toko');
        $store->alamat_toko = $request->input('alamat_toko');

        if ($request->hasFile('foto_profile_toko')) {
            $image = $request->file('foto_profile_toko');
            $imagePath = $image->store('public/store_images');
            $store->foto_profile_toko = basename($imagePath);
        }

        $store->save();

        return redirect()->route('admin.stores.index')->with('success', 'Toko updated successfully');
    }

    public function destroy($id)
    {
        $store = Toko::findOrFail($id);
        $store->delete();

        return redirect()->route('admin.stores.index')->with('success', 'Toko deleted successfully');
    }
} 