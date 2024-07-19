<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $products = Product::where('creator_id', Auth::id())->get();
        // return view('seller.products.index', [
        //     'products' => $products
        // ]);
        if(auth()->user()->can('productCRUD')){
            return view('seller.products.index');
        }
       
            return abort(403);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('seller.products.create', [
            'categories' => $categories
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
        ]);

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
            return redirect()->route('seller.products.index')->with('success', 'Product created successfully');
        } catch (\Exception $e) {
            DB::rollBack();

            $error = ValidationException::withMessages([
                'system_error' => ['System error! ' . $e->getMessage()]
            ]);

            throw $error;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('seller.products.edit', [
            'product' => $product,
            'categories' => $categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $validate = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'photo' => ['sometimes', 'image', 'mimes:png,jpg,jpeg'],
            'category_id' => ['required', 'integer'],
            'price' => ['required', 'integer', 'min:0'],
            'slug' => ['required', 'string', 'max:65535'],
        ]);
    
        DB::beginTransaction();
        try {
            if ($request->hasFile('photo')) {
                $photoPath = $request->file('photo')->move(public_path('products_photo'), $request->file('photo')->getClientOriginalName());
                $validate['photo'] = 'products_photo/' . $request->file('photo')->getClientOriginalName();
            }
            $validate['slug'] = Str::slug($request->name);
            $validate['creator_id'] = Auth::id();
            $product->update($validate);
            DB::commit();
            return redirect()->route('seller.products.index')->with('success', 'Product updated successfully');
        } catch (\Exception $e) {
            DB::rollBack();
    
            $error = ValidationException::withMessages([
                'system_error' => ['System error! ' . $e->getMessage()]
            ]);
    
            throw $error;
        }
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
{
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
        return redirect()->route('seller.products.index')->with('success', 'Product deleted successfully');
    } catch (\Exception $e) {
        DB::rollBack();

        $error = ValidationException::withMessages([
            'system_error' => ['System error! ' . $e->getMessage()]
        ]);

        throw $error;
    }
}

}