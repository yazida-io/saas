<a href="{{ route($route) }}"
   class="
    block relative flex-center px-7 py-2 gap-4 transition duration-200 ease-in-out
    after:absolute after:top-1/2 after:-left-1 after:w-2 after:h-[90%] after:transform after:-translate-y-1/2
    after:bg-rose-600 after:transition-all after:duration-300 after:ease-in-out after:rounded-xl
    {{ request()->routeIs($route ?? '') ?
        'bg-rose-200/50 dark:bg-rose-200/10 text-rose-600 border-rose-600  after:shadow-[0_-7px_19px_0px_rgba(200,10,20,0.7)]' :
        'hover:text-rose-600 border-transparent hover:border-rose-400  after:opacity-0 hover:after:opacity-7'
    }}
   "
>
    <x-dynamic-component :component="$icon" class="w-6 h-6"/>

    <span class="flex-1"> {{ $name }} </span>

    @if($badge ?? false)
        <span class="absolute -top-1 -right-1 px-2 py-0.5 bg-rose-600 text-white rounded-full text-[0.7rem] lowercase">
            {{ $badge }}
        </span>
    @endif
</a>
