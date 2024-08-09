<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Toko;
use Illuminate\Http\Request;

class SellerEditController extends Controller
{
    public function index()
    {
        $toko = Toko::where('id_seller', auth()->id())->get()->first();
        $product = Product::where('store_id', $toko->id_toko)->get();
        return view('seller-edit', ['toko' => $toko, 'product' => $product]);
    }
}
