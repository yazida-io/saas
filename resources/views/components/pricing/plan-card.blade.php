@php
    $width = "200px";
    $height = "50px";

    $featuredPlan = "clip-path: polygon(
        0 0,
        calc(50% - $width / 2) 0,
        calc(50% - ($width / 2) / 2) calc($height / 2),
        calc(50% + ($width / 2) / 2) calc($height / 2),
        calc(50% + $width / 2) 0%,
        100% 0,
        100% 100%,
        0 100%
    );";

    $bestOfferBox = "clip-path: polygon(
        calc(($width / 2) / 2) 0,
        calc(100% - ($width / 2) / 2) 0,
        100% calc($height / 2),
        calc(100% - ($width / 2) / 2) 100%,

        calc(($width / 2) / 2) 100%,
        0 calc($height / 2)
    );
     width: $width;
     height: $height;
    ";
@endphp

<div class="relative">
    <div
        class="
         w-full h-full relative z-0 pt-10 space-y-12 px-7 py-10
        @if($bestValue ?? false)
         before:absolute before:z-[-1]
         before:top-0 before:left-0
         before:bg-indigo-100 dark:before:bg-indigo-900 before:w-full before:h-full before:shadow-2xl
         @else
         bg-pink-100/10 shadow-lg
         @endif
        "
        @if($bestValue ?? false) style=" {{ $featuredPlan }}" @endif
    >
        <div class="space-y-7">
            <h4
                class="text-3xl font-bold"
                style="color: {{ $color }}"
            >{{ $title }}</h4>
            <p class="text-xl h-20 dark:text-slate-200/70">{{ $description }}</p>
            <p class="relative pl-4">
                <sup class="text-2xl absolute top-0 left-0">€</sup>
                <span class="text-6xl font-bold dark:text-white">{{ $price }}</span>
                <span class="dark:text-slate-200/70">/month</span>
            </p>
        </div>

        <a
            href="{{ $actionUrl }}"
            class="
                transition-all duration-300
                text-white text-base font-bold uppercase
                flex-center px-4 py-3 gap-2
                @if($bestValue)
                    bg-gradient-to-r from-rose-500 to-indigo-500
                    shadow-rose-400/20 shadow-2xl hover:shadow-rose-400/70
                    border-transparent
                @else
                    shadow shadow-slate-400/20 bg-slate-800 hover:bg-slate-900 hover:shadow-slate-400/70
                    border border-slate-400/20 hover:border-slate-400/70
                @endif
                "
        >
            {{ $action }}
        </a>

        <div>
            <ul class="space-y-2">
                @foreach($features as $feature)
                    <li class="flex gap-2">
                        <svg
                            class="w-5 h-5"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                        >
                            <path
                                fill="currentColor"
                                d="m10.6 13.8l-2.15-2.15q-.275-.275-.7-.275t-.7.275q-.275.275-.275.7t.275.7L9.9 15.9q.3.3.7.3t.7-.3l5.65-5.65q.275-.275.275-.7t-.275-.7q-.275-.275-.7-.275t-.7.275L10.6 13.8ZM12 22q-2.075 0-3.9-.788t-3.175-2.137q-1.35-1.35-2.137-3.175T2 12q0-2.075.788-3.9t2.137-3.175q1.35-1.35 3.175-2.137T12 2q2.075 0 3.9.788t3.175 2.137q1.35 1.35 2.138 3.175T22 12q0 2.075-.788 3.9t-2.137 3.175q-1.35 1.35-3.175 2.138T12 22Z"
                            />
                        </svg>
                        <span class="dark:text-slate-200/70">{{ $feature }}</span>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

    @if($bestValue ?? false)
        <div
            class="
            absolute scale-[98%] -top-[29px] left-1/2 transform -translate-x-1/2
            bg-gradient-to-b from-rose-300 to-rose-500
            text-white text-base font-bold uppercase
            flex-center shadow-xl shadow-rose-400
            "
            style="{{ $bestOfferBox }}"
        >
            Best Offer
        </div>
    @endif
</div>

