<?php

namespace App\Http\Controllers;

use App\Models\Toko;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\ValidationException;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (auth()->user()->can('productCRUD')) {
            // Mengambil produk milik penjual yang login
            $products = Product::where('id_seller', Auth::id())->paginate(5);

            // Mengirim data produk ke view dengan pagination
            return view('seller-page', compact('products'));
        }

        return abort(403);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $storeId = Auth::id(); // Ambil ID seller yang sedang login
        $stores = Toko::where('id_seller', $storeId)->get(); // Ambil toko yang sesuai dengan ID seller

        return view('seller.products.create', [
            'categories' => $categories,
            'stores' => $stores, // Kirim data stores ke view
        ]);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'photo' => ['required', 'image', 'mimes:png,jpg,jpeg'],
            'slug' => ['required', 'string', 'max:65535'],
            'category_id' => ['required', 'integer'],
            'price' => ['required', 'integer', 'min:0'],
            'quantity' => ['required', 'integer'],
            'store_id' => ['required', 'integer', 'exists:toko,id_toko'], // Validasi store_id
        ]);

        $store = Toko::find($validate['store_id']);

        // Pastikan toko yang dipilih milik seller yang sedang login
        if ($store->id_seller !== Auth::id()) {
            return redirect()->back()->with('error', 'You can only add products to your own store.');
        }

        DB::beginTransaction();
        try {
            if ($request->hasFile('photo')) {
                $photoPath = $request->file('photo')->move(public_path('products_photo'), $request->file('photo')->getClientOriginalName());
                $validate['photo'] = 'products_photo/' . $request->file('photo')->getClientOriginalName();
            }
            $validate['slug'] = Str::slug($request->name);
            $validate['creator_id'] = Auth::id();
            $newProduct = Product::create($validate);
            DB::commit();
            return redirect()->route('seller-page')->with('success', 'Product created successfully');
        } catch (\Exception $e) {
            DB::rollBack();

            $error = ValidationException::withMessages([
                'system_error' => ['System error! ' . $e->getMessage()],
            ]);

            throw $error;
        }
    }


    /**
     * Display the specified resource.
     */
    public function showProductSlider()
    {
        $products = Product::inRandomOrder()->paginate(5);
        return view('product-slider', compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        // Pastikan produk milik toko penjual yang login
        if ($product->id_seller !== Auth::id()) {
            return abort(403);
        }

        $categories = Category::all();
        return view('seller.products.edit', [
            'product' => $product,
            'categories' => $categories,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        // Pastikan produk milik toko penjual yang login
        if ($product->id_seller !== Auth::id()) {
            return abort(403);
        }

        $validate = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'photo' => ['sometimes', 'image', 'mimes:png,jpg,jpeg'],
            'category_id' => ['required', 'integer'],
            'price' => ['required', 'integer', 'min:0'],
            'slug' => ['required', 'string', 'max:65535'],
            // Tidak perlu validasi store_id karena tidak boleh diubah
        ]);

        DB::beginTransaction();
        try {
            if ($request->hasFile('photo')) {
                $photoPath = $request->file('photo')->move(public_path('products_photo'), $request->file('photo')->getClientOriginalName());
                $validate['photo'] = 'products_photo/' . $request->file('photo')->getClientOriginalName();
            }
            $validate['slug'] = Str::slug($request->name);
            $product->update($validate);
            DB::commit();
            return redirect()->route('seller-page')->with('success', 'Product updated successfully');
        } catch (\Exception $e) {
            DB::rollBack();

            $error = ValidationException::withMessages([
                'system_error' => ['System error! ' . $e->getMessage()],
            ]);

            throw $error;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        // Pastikan produk milik toko penjual yang login
        if ($product->id_seller !== Auth::id()) {
            return abort(403);
        }

        DB::beginTransaction();
        try {
            // Hapus file gambar dari direktori
            $photoPath = public_path($product->photo);
            if (file_exists($photoPath)) {
                unlink($photoPath);
            }

            // Hapus produk dari database
            $product->delete();

            DB::commit();
            return redirect()->route('seller-page')->with('success', 'Product deleted successfully');
        } catch (\Exception $e) {
            DB::rollBack();

            $error = ValidationException::withMessages([
                'system_error' => ['System error! ' . $e->getMessage()],
            ]);

            throw $error;
        }
    }

    public function cart()
    {
        return view('partials.cart');
    }

    public function addToCart($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return redirect()->back()->with('error', 'Product not found.');
        }

        $cart = Session::get('cart', []);
        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                'name' => $product->name,
                'quantity' => 1,
                'price' => $product->price,
                'photo' => $product->photo,
            ];
        }
        Session::put('cart', $cart);

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function showProducts()
    {
        // Ambil produk dengan paginasi (atau sesuai kebutuhan)
        $products = Product::paginate(10);

        // Kirim data produk ke view
        return view('categories', compact('products'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $categoryName = $request->input('category');

        // Start the query builder
        $productQuery = Product::with(['category', 'toko']);

        // Filter by search query
        if ($query) {
            $productQuery->where('name', 'LIKE', "%{$query}%");
        }

        // Filter by category if provided
        if ($categoryName) {
            // Assuming category name is unique and you want to filter by category name
            $productQuery->whereHas('category', function ($q) use ($categoryName) {
                $q->where('name', $categoryName);
            });
        }

        // Paginate the results
        $products = $productQuery->paginate(10);
        $category = Category::all();

        // Return the paginated products as JSON
        return response()->json($products);
    }
}
