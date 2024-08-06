<?php

namespace App\Http\Controllers;

use App\Models\RoleRequest;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoleRequestController extends Controller
{
    public function index()
    {
        $roleRequests = DB::table('role_change_requests')
            ->join('users', 'role_change_requests.user_id', '=', 'users.id')
            ->select('role_change_requests.*', 'users.name', 'users.address', 'users.phone_number', 'users.email')
            ->get();
    
        return view('admin.role-requests.index', compact('roleRequests'));
    }    

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'requested_role' => 'required|string',
            'name' => 'required|string|max:255',
            'address' => 'nullable|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'nullable|string|max:20',
        ]);
    
        $roleRequest = new RoleRequest();
        $roleRequest->user_id = $validatedData['user_id'];
        $roleRequest->requested_role = $validatedData['requested_role'];
        $roleRequest->name = $validatedData['name'];
        $roleRequest->address = $validatedData['address'] ?? '';
        $roleRequest->email = $validatedData['email'];
        $roleRequest->phone = $validatedData['phone'] ?? '';
        $roleRequest->status = 'pending';
    
        $roleRequest->save();
    
        return redirect()->back()->with('success', 'Role change request submitted successfully.');
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
}
