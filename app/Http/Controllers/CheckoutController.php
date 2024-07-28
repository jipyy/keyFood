<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function showCheckoutDetails()
    {
        $user = Auth::user();
        return view('checkout', compact('user'));
    }
}

