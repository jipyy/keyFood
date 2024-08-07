<?php

namespace App\Http\Controllers;

use App\Models\RoleRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class RoleRequestController extends Controller
{
    public function index()
    {
        $roleRequests = DB::table('role_change_requests')
            ->join('users', 'role_change_requests.user_id', '=', 'users.id')
            ->select('role_change_requests.*', 'users.*')
            ->get();

        return view('admin.role-requests.index', compact('roleRequests'));
    }

    public function approve($id)
    {
        // Delete existing role request entries with the given model_id and role_id = 2
        RoleRequest::where('model_id', $id) // Remove existing role requests with role_id = 3
            ->where('role_id', 3)
            ->delete();

        // Create a new role request entry for the approved role
        $roleRequest = new RoleRequest;
        $roleRequest->role_id = 2; // Assign the role ID for approval
        $roleRequest->model_type = 'App\Models\User';
        $roleRequest->model_id = $id;
        $roleRequest->save();

        // Also delete the corresponding entry in the role_change_requests table
        DB::table('role_change_requests')
            ->where('user_id', $id) // Use $id to match user_id/model_id
            ->delete();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Role changed successfully.');
    }



    public function cancel($id)
    {
        // Also delete the corresponding entry in the role_change_requests table
        DB::table('role_change_requests')
            ->where('user_id', $id) // Use $id to match user_id/model_id
            ->delete();

        // Redirect back with a cancel message
        return redirect()->back()->with('info', 'Role change request canceled.');
    }



    public function store(Request $request)
    {
        // Validasi input jika diperlukan
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'requested_role' => 'required',
        ]);

        // Cek apakah user_id sudah ada di tabel role_change_requests
        $existingRequest = DB::table('role_change_requests')
            ->where('user_id', $request->user_id)
            ->first();

        if ($existingRequest) {
            return redirect()->back()->with('error', 'A role change request for this user already exists.');
        }

        // Simpan data ke database
        DB::table('role_change_requests')->insert([
            'user_id' => $request->user_id,
            'requested_role' => $request->requested_role,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->back()->with('success', 'Role change request submitted successfully.');
    }
}
