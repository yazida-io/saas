<?php

namespace App\Http\Controllers;

use App\Http\Requests\Invoice\InvoiceRequest;
use App\Models\Invoice;

class InvoiceController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', Invoice::class);

        return Invoice::all();
    }

    public function store(InvoiceRequest $request)
    {
        $this->authorize('create', Invoice::class);

        return Invoice::create($request->validated());
    }

    public function show(Invoice $invoice)
    {
        $this->authorize('view', $invoice);

        return $invoice;
    }

    public function update(InvoiceRequest $request, Invoice $invoice)
    {
        $this->authorize('update', $invoice);

        $invoice->update($request->validated());

        return $invoice;
    }

    public function destroy(Invoice $invoice)
    {
        $this->authorize('delete', $invoice);

        $invoice->delete();

        return response()->json();
    }
}
