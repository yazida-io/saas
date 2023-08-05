<section class="dark:bg-black bg-white">
    <div class="container">
        <div class="flex items-center justify-center py-10">
            <h1 class="text-7xl font-bold">
                {{ $title ?? '' }}
            </h1>
        </div>
    </div>

    @if($links ?? false)
        <div class="backdrop-blur border-t border-b-0 border-indigo-200/10">
            <div class="container h-10 bg-black/10 flex-center">
                @foreach($links as $link)
                    <a
                        href="{{ route($link->route) }}"
                        class="
                            flex-1 p-2 text-center border-indigo-200/10
                            @if(request()->routeIs($link->route)) bg-indigo-800/20 text-white @else hover:bg-indigo-500/5 @endif
                            @if($loop->last) border-x @else border-l @endif
                        "
                    >
                        {{ $link->name }}
                    </a>
                @endforeach
            </div>
        </div>
    @endif
</section>
