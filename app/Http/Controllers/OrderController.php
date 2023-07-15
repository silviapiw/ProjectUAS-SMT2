<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::all();

        return view('orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products = Product::all();
        return view('orders.create', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tanggal' => 'required|date',
            'nama_pemesan' => 'required',
            'alamat_pemesan' => 'required',
            'no_hp' => 'required|numeric',
            'email' => 'required|email',
            'jumlah_pesanan' => 'required|numeric',
            'deskripsi' => 'required',
            'product_id' => 'required',
        ]);

        Order::create($validatedData);

        return redirect('/orders')->with('success', 'Order added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order, Product $product): View
    {
        return view('orders.show', compact('product', 'order'));
    }

    /*
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        $products = Product::all();

        return view('orders.edit', compact('products', 'order'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        $validatedData = $request->validate([
            'tanggal' => 'required|date',
            'nama_pemesan' => 'required',
            'alamat_pemesan' => 'required',
            'no_hp' => 'required|numeric',
            'email' => 'required|email',
            'jumlah_pesanan' => 'required|numeric',
            'deskripsi' => 'required',
            'product_id' => 'required',
        ]);

        $order->update($validatedData);

        return redirect('/orders')->with('success', 'Order updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        $order->delete();

        return redirect('/orders')->with('success', 'Order deleted successfully!');
    }
}
