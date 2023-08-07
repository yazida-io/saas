@extends("layouts.app")

@section("content")
    <x-app.settings-header/>


    <section class="py-7 container space-y-7">
        @if(auth()->user()->plan === null)
            <x-app.settings.inactive-plan-notification/>
        @else
            <x-app.profile.current-subscription/>
        @endif

        <x-app.profile.update-user-info />

    </section>
@endsection

