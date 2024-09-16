<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        // Cargar relaciones user y product
        $orders = Order::with(['user', 'product'])->get();
        return response()->json($orders);
    }

    public function show(Order $order)
    {
        // Cargar relaciones user y product
        $order->load(['user', 'product']);
        return response()->json($order);
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $order = Order::create($request->all());
        return response()->json($order->load(['user', 'product']), 201);
    }

    public function update(Request $request, Order $order)
    {
        $request->validate([
            'user_id' => 'exists:users,id',
            'product_id' => 'exists:products,id',
            'quantity' => 'integer|min:1',
        ]);

        $order->update($request->all());
        return response()->json($order->load(['user', 'product']));
    }

    public function destroy(Order $order)
    {
        $order->delete();
        return response()->json(null, 204);
    }
}
