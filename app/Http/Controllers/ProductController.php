<?php

namespace App\Http\Controllers;

use App\Http\Requests\Product\ProductRequest;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', Product::class);

        return Product::all();
    }

    public function store(ProductRequest $request)
    {
        $this->authorize('create', Product::class);

        return Product::create($request->validated());
    }

    public function show(Product $product)
    {
        $this->authorize('view', $product);

        return $product;
    }

    public function update(ProductRequest $request, Product $product)
    {
        $this->authorize('update', $product);

        $product->update($request->validated());

        return $product;
    }

    public function destroy(Product $product)
    {
        $this->authorize('delete', $product);

        $product->delete();

        return response()->json();
    }
}
