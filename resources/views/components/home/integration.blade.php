<section class="py-20">
    <div class="container rounded-xl dark:bg-slate-500/20 bg-indigo-800/20 h-80 grid grid-cols-2 overflow-hidden">
        <div class="flex-center">
            <div class="p-7 flex items-start justify-center flex-col max-w-xl space-y-3">
                <h2 class="text-5xl font-extrabold dark:text-white">
                    {{ __('pages/home.integration.title') }}
                </h2>
                <p class="text-xl"> {{ __('pages/home.integration.description') }} </p>
            </div>
        </div>
        <div class="
        relative flex flex-col justify-around items-start py-10
        before:absolute before:top-0 before:right-0 before:-translate-y-1/2 before:-translate-x-0 before:transform before:rounded-[100%]
        before:h-[515px] before:w-[515px] before:z-[-1] before:bg-rose-400/20
        ">
            <span class="absolute hidden top-0 left-1/2 -translate-x-1/2 transform -translate-y-1/2 rounded-[100%] min-h-[500px] bg-rose-500/20 min-w-[500px] h-full w-full"></span>

            <div class="flex-center w-full px-20 gap-7">
                @foreach(range(1, 3) as $item)
                    <span class="w-24 h-24 bg-white/70 flex-center rounded-full">
                        {{ $item }}
                    </span>
                @endforeach
            </div>

            <div class="flex-center w-full px-20 gap-7">
                @foreach(range(1, 2) as $item)
                    <span class="w-24 h-24 bg-white/70 flex-center rounded-full">
                        {{ $item }}
                    </span>
                @endforeach
            </div>
        </div>
    </div>
</section>
