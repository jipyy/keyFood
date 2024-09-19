<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminProfileController extends Controller
{
    public function index()
    {
        return view("admin.profile.index");
    }
    public function edit()
    {
        return view('admin.profile.edit', [
            'user' => Auth::user()
        ]);
    }
    public function update(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . Auth::id(),
            'password' => 'nullable|string|min:8|confirmed',
            'first_name' => 'nullable|string|max:255',
            'last_name' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:255',
            'location' => 'nullable|string|max:255',
        ]);

        // Ambil user yang sedang login
        $user = Auth::user();

        // Update data user selain password dan img
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->phone = $request->input('phone');
        $user->location = $request->input('location');

        // Jika ada input password, update password
        if ($request->filled('password')) {
            $user->password = Hash::make($request->input('password'));
        }

        // Jika ada file img yang diunggah, proses penggantian gambar
        if ($request->hasFile('img')) {
            // Hapus gambar lama jika ada
            if ($user->img && file_exists(public_path($user->img))) {
                unlink(public_path($user->img)); // Hapus file gambar lama dari direktori public/img
            }

            // Simpan gambar baru
            $file = $request->file('img');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('img'), $filename);
            $user->img = 'img/' . $filename; // Update kolom img dengan nama file baru
        }

        // Jika tidak ada gambar baru diunggah dan tidak ada gambar sebelumnya, set img ke null
        if (!$request->hasFile('img') && !$user->img) {
        
        }

        // Simpan perubahan pada user
        $user->save();

        return redirect('/admin/profile')->with('success', 'Profile updated successfully.');
    }


}

