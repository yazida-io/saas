@extends("layouts.app")

@section("content")
    <x-app.settings-header/>

    <div class="py-7">
        <x-app.billing.subscription />
        <x-app.billing.invoices />
    </div>
@endsection

