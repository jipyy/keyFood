<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orders;
use Illuminate\Support\Facades\Log;

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

        // dd($products);
        // Loop through each product and create an order
        foreach ($products as $product) {
            // Check if the required keys exist in the product array
            if (!isset($product['price'], $product['quantity'], $product['photo'], $product['product_id'], $product['category_id'], $product['store_id'])) {
                Log::error('Missing product data: ' . json_encode($product));
                return redirect()->back()->withErrors(['products' => 'Missing product data.']);
            }
            // dd($products);

            try {
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
                $order->category_id = $product['category_id']; // Tambahkan category_id
                $order->toko_id = $product['store_id']; // Tambahkan toko_id
                $order->save();
            } catch (\Exception $e) {
                // Log the exception message
                Log::error('Order creation failed: ' . $e->getMessage());
                return redirect()->back()->withErrors(['order' => 'Failed to create order.']);
            }
        }

        // Redirect to the order history page
        return redirect('/history')->with('success', 'Order created successfully!');
    }

    public function showOrderHistory()
    {
        $orders = Orders::with('products')->where('id_user', auth()->id())->get(); // Mengambil data order beserta produk
        return view('history', compact('orders'));
    }
}
