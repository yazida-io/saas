<x-common.setting-section title="Subscription">
    @if($hasActiveSubscription)
        <x-app.settings.inactive-plan-notification class="px-7 mt-7 container"/>
    @endif

    <h3 class="text-xl font-bold uppercase text-indigo-800 px-7">plans</h3>

    <div class="flex-center gap-4 px-7">
        @foreach($plans as $plan)
            <label class="h-28 border border-slate-400/20 flex-1 p-4 group relative hover:cursor-pointer">
                <input
                    type="radio"
                    name="plan"
                    value="{{ $plan->id }}"
                    class="hidden checked:block group-hover:block absolute top-0 right-0 w-full h-full"
                    {{ $plan->id === 1 ? 'checked' : '' }}
                />
                <div class="flex-1 flex justify-between items-center">
                    <h1 class="text-3xl font-bold">{{ $plan->name }}</h1>
                    <p class="text-xl">€{{ $plan->price }}</p>
                </div>
                <p class="text-base">{{ $plan->description }}</p>
            </label>
        @endforeach
    </div>

    <h3 class="text-xl font-bold uppercase text-indigo-800 px-7">Payment method</h3>

    <div class="gap-4 px-7">
        <x-common.labeled-input
            label="Cardholder name"
            id="card-holder-name"
            name="card-holder-name"
            type="text"
            placeholder="Your name"
            value="{{ Auth::user()->name }}"
        />
    </div>

    <div class="px-7 py-4 text-white">
        <div id="card-element"></div>
    </div>

    <div class="px-7 py-4">
        <x-common.action-button
            text="Subscribe"
            id="card-button"
            data-secret="{{ $intent->client_secret }}"
        />
    </div>
</x-common.setting-section>

@push("scripts")
    <script src="https://js.stripe.com/v3/"></script>

    <script>
        const stripe = Stripe('{{ config('services.stripe.key') }}');

        const elements = stripe.elements();
        const cardElement = elements.create('card');

        cardElement.mount('#card-element');

        const cardHolderName = document.getElementById('card-holder-name');
        const cardButton = document.getElementById('card-button');
        const clientSecret = cardButton.dataset.secret;

        cardButton.addEventListener('click', async (e) => {
            e.preventDefault();

            const {setupIntent, error} = await stripe.confirmCardSetup(
                clientSecret, {
                    payment_method: {
                        card: cardElement,
                        billing_details: {name: cardHolderName.value}
                    }
                }
            );

            if (error) {
                console.error(error)
            } else {
                axios.post('{{ route('app.settings.subscriptions.subscribe') }}', {
                    payment_method: setupIntent.payment_method,
                    plan: document.querySelector('input[name="plan"]:checked').value,
                    coupon: "--",
                    recurrence: "monthly"
                }).then(() => {
                    window.location.replace('{{ route('app.settings.subscriptions') }}');
                });
            }
        });
    </script>
@endpush
