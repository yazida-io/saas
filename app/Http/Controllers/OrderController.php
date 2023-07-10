<?php

namespace App\Http\Controllers;

use App\Http\Requests\Order\OrderRequest;
use App\Models\Order;

class OrderController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', Order::class);

        return Order::all();
    }

    public function store(OrderRequest $request)
    {
        $this->authorize('create', Order::class);

        return Order::create($request->validated());
    }

    public function show(Order $order)
    {
        $this->authorize('view', $order);

        return $order;
    }

    public function update(OrderRequest $request, Order $order)
    {
        $this->authorize('update', $order);

        $order->update($request->validated());

        return $order;
    }

    public function destroy(Order $order)
    {
        $this->authorize('delete', $order);

        $order->delete();

        return response()->json();
    }
}
