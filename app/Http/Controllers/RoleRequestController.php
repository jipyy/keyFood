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
        // $roleRequests = RoleRequest::with('user')->get(); // Assuming you have a RoleRequest model with a relationship to User
        $roleRequests = DB::table('role_change_requests')
                            ->join('users', 'role_change_requests.user_id', '=', 'users.id') // Join berdasarkan user_id di role_change_requests
                            ->select('role_change_requests.*', 'users.*')
                            ->get();
        // dd($roleRequests);
        return view('admin.role-requests.index', compact('roleRequests'));
    }


    public function approve($id)
    {
        $roleRequest = new RoleRequest;
        $roleRequest->role_id = 2;
        $roleRequest->model_type = 'App\Models\User';
        $roleRequest->model_id = $id;
        $roleRequest->save();

        return redirect()->back()->with('success', 'Role changed successfully.');
    }

    public function cancel($id)
    {
        $request = RoleRequest::findOrFail($id);

        // Optionally, mark the request as canceled
        $request->status = 'canceled';
        $request->save();

        return redirect()->back()->with('info', 'Role change request canceled.');
    }
}
