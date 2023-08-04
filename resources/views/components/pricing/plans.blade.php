<section class="py-20 space-y-20">
    <div class="container">
        <div class="
        mx-auto w-80 bg-white dark:text-white dark:bg-white/20 h-12 grid grid-cols-2 gap-2 p-1 relative font-bold
        after:absolute after:inset-0 after:bg-gradient-to-r after:from-rose-500/70 after:to-indigo-500/70 after:shadow-lg after:rounded-lg after:z-[-1] after:filter after:blur-[20px] after:opacity-50
        ">
            <button>
                Monthly
            </button>
            <button class="bg-indigo-800 flex-center gap-4 text-white">
                Yearly
                <span class="text-xs px-3 py-1 bg-rose-500 text-white">-20%</span>
            </button>
        </div>
    </div>

    <div class="max-w-4xl mx-auto gap-4 grid grid-cols-3 h-[560px]">
        @foreach($plans as $plan)
            @php $plan = (object) $plan; @endphp
            <x-pricing.plan-card
                :best-value="$plan->bestValue ?? false"
                title="{{ $plan->name }}"
                price="{{ $plan->price }}"
                description="{{ $plan->description }}"
                :color="$plan->color ?? 'white'"
                :features="$plan->features"
                :action="$plans->cta ?? 'Get Started'"
                :action-url="$plans->ctaUrl ?? '#'"
            />
        @endforeach
    </div>
</section>
