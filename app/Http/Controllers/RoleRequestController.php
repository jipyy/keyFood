<?php
namespace App\Http\Controllers;

use App\Models\RoleRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        $roleRequest = RoleRequest::findOrFail($id);

        $user = User::findOrFail($roleRequest->user_id);
        $user->assignRole($roleRequest->requested_role);

        $roleRequest->status = 'approved';
        $roleRequest->save();

        return redirect()->back()->with('success', 'Role changed successfully.');
    }

    public function cancel($id)
    {
        $request = RoleRequest::findOrFail($id);
        $request->status = 'canceled';
        $request->save();

        return redirect()->back()->with('info', 'Role change request canceled.');
    }

    public function store(Request $request)
    {
        // Validasi input jika diperlukan
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'requested_role' => 'required',
        ]);

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