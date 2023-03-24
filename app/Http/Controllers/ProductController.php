<?php

namespace App\Http\Controllers;


use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('index', [
            'products' => $products
        ]);
    }

    public function add()
    {
        return view('create');
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image',
            'price' => 'required',
            'stock' => 'required',
            'description' => 'required'
        ],[
            'name.required' => 'Nama Produk tidak boleh kosong.',
            'image.required' => 'Foto Produk tidak boleh kosong.',
            'image.image' => 'Foto Produk harus dalam format gambar.',
            'price.required' => 'Harga Produk tidak boleh kosong.',
            'stock.required' => 'Stok Produk tidak boleh kosong.',
            'description.required' => 'Deskripsi Produk tidak boleh kosong.',
        ]);

        $data = $request->all();
        $data['image'] = $request->file('image')->store('images', 'public');

        Product::create($data);

        return redirect()->route('products.index');
    }

    public function show(Product $product)
    {
        return view('show', [
            'product' => $product
        ]);
    }

    public function update(Request $request, Product $product){
        $request->validate([
            'name' => 'required',
            'image' => 'image',
            'price' => 'required',
            'stock' => 'required',
            'description' => 'required'
        ],[
            'name.required' => 'Nama Produk tidak boleh kosong.',
            'image.image' => 'Foto Produk harus dalam format gambar.',
            'price.required' => 'Harga Produk tidak boleh kosong.',
            'stock.required' => 'Stok Produk tidak boleh kosong.',
            'description.required' => 'Deskripsi Produk tidak boleh kosong.',
        ]);

        $data = $request->all();

        if ($request->file('image')) {
            Storage::delete('public/' . $product->image);
            $data['image'] = $request->file('image')->store( 'images', 'public');
        } else{
            $data['image'] = $product->image;
        }

        $product->update($data);

        return redirect()->route('products.index');
    }

    public function delete(Product $product) 
    {
        Storage::delete('public/ . $product->image');

        $product->delete();
        
        return redirect()->route('products.index');
    }
}
