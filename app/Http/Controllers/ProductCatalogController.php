<?php

namespace App\Http\Controllers;

use App\Http\Requests\Product\ProductCatalogRequest;
use App\Models\ProductCatalog;

class ProductCatalogController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', ProductCatalog::class);

        return ProductCatalog::all();
    }

    public function store(ProductCatalogRequest $request)
    {
        $this->authorize('create', ProductCatalog::class);

        return ProductCatalog::create($request->validated());
    }

    public function show(ProductCatalog $productCatalog)
    {
        $this->authorize('view', $productCatalog);

        return $productCatalog;
    }

    public function update(ProductCatalogRequest $request, ProductCatalog $productCatalog)
    {
        $this->authorize('update', $productCatalog);

        $productCatalog->update($request->validated());

        return $productCatalog;
    }

    public function destroy(ProductCatalog $productCatalog)
    {
        $this->authorize('delete', $productCatalog);

        $productCatalog->delete();

        return response()->json();
    }
}
