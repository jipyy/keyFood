<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orders;
use App\Models\Toko;
use App\Models\OrderDetail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;


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
        $totalOrderPrice = $request->input('total_price');

        if ($products === null || !is_numeric($totalOrderPrice)) {
            Log::error('Invalid input data. Products: ' . $request->input('products') . ', Total Price: ' . $totalOrderPrice);
            return redirect()->back()->withErrors(['checkout' => 'Invalid input data. Please try again.']);
        }

        // DB::beginTransaction(); // Memulai transaksi

        // Kirim pesan

        try {
            $totalOrderPrice = 0; // Untuk menyimpan total harga dari semua produk dalam satu order

            // dd($products);
            foreach ($products as $product) {
                $toko = Toko::where('id_toko', $product['store_id'])->with('user')->first();

                // dd($products);

                // dd($toko);

                // dd($request->request);

                Http::post('https://wa.ponpesalgaz.online/send-message', [
                    'number' => $request['checkout-phone'],
                    'message' => "Yth. Pelanggan KeyFood,\n\nIni adalah konfirmasi pesanan Anda. Anda telah membeli:\n\n* *" . $product['name'] . " sebanyak " . $product['quantity'] . " buah, dari toko " . $toko['nama_toko'] . "*.\n\nTotal pembayaran: Rp " . number_format($product['quantity'] * $product['price']) . ".\nSilahkan hubungi penjual: "  . $toko['user']['phone'] .  ".\n\nTerima kasih atas kepercayaan Anda. Tim KeyFood akan segera memproses pesanan Anda.\n\nHormat kami,\nTim KeyFood",
                ]);

                Http::post('https://wa.ponpesalgaz.online/send-message', [
                    'number' => $toko['user']['phone'],
                    'message' => "Yth. Penjual,\n\nKami informasikan bahwa produk Anda, *" . $product['name'] . "* (x" . $product['quantity'] . "), telah dipesan oleh *" . $request['checkout-name'] . "*. \n\nDetail pesanan:\n* *Jumlah:* " . $product['quantity'] . " buah/pcs\n* *Total harga:* Rp " . ($product['quantity'] * $product['price']) . "\n* *Alamat pengiriman:* " . $request['checkout-address'] . "\n* *Nomor telepon pembeli:* " . $request['checkout-phone'] .
                        (!empty($request['checkout-notes']) ? "\n* *Catatan pembeli:* " . $request['checkout-notes'] : "") .
                        "\n\nMohon segera proses pesanan ini dan informasikan kepada pembeli mengenai status pengiriman. Terima kasih atas kerjasama Anda.\n\nHormat kami,\nTim KeyFood",
                ]);

                // dd('masuk');

                // Check if the required keys exist in the product array
                if (!isset($product['price'], $product['quantity'], $product['photo'], $product['product_id'], $product['category_id'], $product['store_id'])) {
                    Log::error('Missing product data: ' . json_encode($product));
                    return redirect()->back()->withErrors(['products' => 'Missing product data.']);
                }

                // Menghitung total harga untuk produk ini
                $unitPrice = $product['quantity'] * $product['price'];

                // Simpan data ke tabel orders
                $order = new Orders();
                $order->no_order = uniqid('no_order');
                $order->tanggal_order = now();
                $order->quantity = array_sum(array_column($products, 'quantity')); // Menghitung total quantity dari semua produk
                $order->photo = $product['photo'];
                $order->order_date = now();
                $order->id_user = auth()->id();
                $order->location = $request->input('checkout-address');
                $order->harga = $totalOrderPrice; // Simpan harga per produk
                $order->product_id = $product['product_id'];
                $order->category_id = $product['category_id'];
                $order->toko_id = $product['store_id'];
                $order->save();

                // Simpan data ke tabel order_details
                $orderDetail = new OrderDetail();
                $orderDetail->order_id = $order->id;
                $orderDetail->product_id = $product['product_id'];
                $orderDetail->quantity = $product['quantity'];
                $orderDetail->unit_price = $unitPrice; // Menghitung total harga untuk setiap produk
                $orderDetail->save();

                // Tambahkan harga produk ini ke total harga order
                $totalOrderPrice += $unitPrice;
            }

            // Update harga di tabel orders untuk total harga dari seluruh produk
            $order->harga = $totalOrderPrice;
            $order->save();

            DB::commit(); // Commit transaksi jika semua berhasil
            return redirect('/history')->with('success', 'Order created successfully!');
            // Menghapus data dari session dengan key 'namaItem'
            session()->forget('cart');
        } catch (\Exception $e) {
            DB::rollBack(); // Rollback jika terjadi kesalahan
            Log::error('Order creation failed: ' . $e->getMessage());
            return redirect()->back()->withErrors(['order' => 'Failed to create order.']);
        }
    }

    public function showOrderHistory()
    {
        $orders = Orders::with('orderDetails.products')->where('id_user', auth()->id())->get();
        return view('history', compact('orders'));
    }
}
