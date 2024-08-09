<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orders;
use App\Models\OrderDetail; // Pastikan untuk mengimpor model OrderDetail
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB; // Untuk menggunakan transaksi database

class CheckoutController extends Controller
{
    /**
     * Show the checkout details form.
     */
    public function showCheckoutDetails()
    {
        $user = auth()->user();
        
        return view('checkout', compact('user'));
    }

    /**
     * Store a newly created order in storage.
     */
    public function storeOrder(Request $request)
    {
        $products = json_decode($request->products, true);

        // Check if products decoding was successful
        if ($products === null) {
            Log::error('Invalid products data: ' . $request->products);
            return redirect()->back()->withErrors(['products' => 'Invalid products data.']);
        }

        DB::beginTransaction(); // Memulai transaksi

        try {
            foreach ($products as $product) {
                // Check if the required keys exist in the product array
                if (!isset($product['price'], $product['quantity'], $product['photo'], $product['product_id'], $product['category_id'], $product['store_id'])) {
                    Log::error('Missing product data: ' . json_encode($product));
                    return redirect()->back()->withErrors(['products' => 'Missing product data.']);
                }

                // Simpan data ke tabel orders
                $order = new Orders();
                $order->no_order = uniqid('no_order');
                $order->tanggal_order = now();
                $order->quantity = $product['quantity'];
                $order->photo = $product['photo'];
                $order->order_date = now();
                $order->id_user = auth()->id();
                $order->location = $request->input('checkout-address');
                $order->harga = $product['price'];
                $order->product_id = $product['product_id'];
                $order->category_id = $product['category_id'];
                $order->toko_id = $product['store_id'];
                $order->save();

                // Simpan data ke tabel order_details
                $orderDetail = new OrderDetail();
                $orderDetail->order_id = $order->id;
                $orderDetail->product_id = $product['product_id'];
                $orderDetail->quantity = $product['quantity'];
                $orderDetail->unit_price = $product['quantity'] * $product['price']; // Menghitung total harga
                $orderDetail->save();
            }

            DB::commit(); // Commit transaksi jika semua berhasil
            return redirect('/history')->with('success', 'Order created successfully!');

        } catch (\Exception $e) {
            DB::rollBack(); // Rollback jika terjadi kesalahan
            Log::error('Order creation failed: ' . $e->getMessage());
            return redirect()->back()->withErrors(['order' => 'Failed to create order.']);
        }
    }

    public function showOrderHistory()
    {
        $orders = Orders::with('orderDetails.products.toko.category')->where('id_user', auth()->id())->get(); // Mengambil data order beserta produk
        return view('history', compact('orders'));
    }
}
