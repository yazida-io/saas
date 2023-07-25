<section class="py-20">
    <div class="container rounded-xl bg-slate-500/20 h-80 grid grid-cols-2 overflow-hidden">
        <div class="flex-center">
            <div class="p-7 flex items-start justify-center flex-col max-w-xl space-y-3">
                <h2 class="text-5xl font-extrabold text-white">
                    Easy integrations with 170+ tools
                </h2>
                <p class="text-xl">
                    Lorem ipsum dolor sit amet, consectetur adipiscing  edition sed do eiusmod tempor incididunt.
                </p>
            </div>
        </div>
        <div class="relative flex flex-col justify-around items-start py-10">
            <span class="absolute top-0 left-1/2 -translate-x-1/2 transform -translate-y-1/2 rounded-[100%] min-h-[500px] bg-indigo-800/20 min-w-[500px] h-full w-full"></span>

            <div class="flex-center w-full px-20 gap-7">
                @foreach(range(1, 3) as $item)
                    <span class="w-24 h-24 bg-white/20 flex-center rounded-full">
                        {{ $item }}
                    </span>
                @endforeach
            </div>

            <div class="flex-center w-full px-20 gap-7">
                @foreach(range(1, 2) as $item)
                    <span class="w-24 h-24 bg-white/20 flex-center rounded-full">
                        {{ $item }}
                    </span>
                @endforeach
            </div>
        </div>
    </div>
</section>
