<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('product')->get();
        return view('orders.index', compact('orders'));
    }

    public function create()
    {
        $products = Product::all();
        return view('orders.create', compact('products'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'product_id' => 'required|exists:products,id',
            'comment' => 'nullable|string',
        ]);

        Order::create($request->all());
        return redirect()->route('orders.index');
    }

    public function show(Order $order)
    {
        return view('orders.show', compact('order'));
    }

    public function update(Request $request, Order $order)
    {
        $order->update(['status' => 'completed']);
        return redirect()->route('orders.index');
    }
}
