<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();

        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kode' => 'required',
            'nama' => 'required',
            'harga_jual' => 'required|numeric',
            'stok' => 'required|numeric',
            'category_id' => 'required',
        ]);

        Product::create($validatedData);

        return redirect('/products')->with('success', 'Product added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product, Category $category): View
    {
        return view('products.show', compact('product', 'category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Category::all();

        return view('products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $validatedData = $request->validate([
            'kode' => 'required',
            'nama' => 'required',
            'harga_jual' => 'required|numeric',
            'stok' => 'required|numeric',
            'category_id' => 'required',
        ]);

        $product->update($validatedData);

        return redirect('/products')->with('success', 'Product updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect('/products')->with('success', 'Product deleted successfully!');
    }
}
