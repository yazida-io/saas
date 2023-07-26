<header
    class="fixed left-0 right-0 top-0 z-40 backdrop-blur-3xl bg-slate-200/20 dark:bg-indigo-800/20 border-b dark:border-slate-200/20 border-indigo-800/10">
    <nav class="container flex justify-between items-center">
        <a href="{{ route('home')  }}">
            <x-logo/>
        </a>

        <div class="flex-center gap-4">
            @foreach($links as $link)
                <a
                    href="{{ route($link['route'] ?? 'home') }}"
                    class="
                    px-4 py-4 relative
                    after:absolute after:bottom-0 after:left-0 after:w-full after:h-1
                    after:bg-rose-600 after:transition-all after:duration-300 after:ease-in-out after:rounded-xl
                    {{ request()->routeIs($link['route'] ?? 'home') ?
                        'text-rose-600 border-rose-600  after:shadow-[0_-7px_19px_0px_rgba(200,10,20,0.7)]' :
                        'hover:text-rose-600 border-transparent hover:border-rose-400  after:opacity-0 hover:after:opacity-7'
                    }}
                    "
                >
                    {{ $link['name'] }}
                </a>
            @endforeach
        </div>

        <div class="flex-center gap-4">
            <a
                href="{{ route('auth.sign-in') }}"
                class="
                px-4 py-2 border-2
                dark:text-slate-200 dark:hover:text-opacity-70 dark:hover:border-slate-200/70 dark:border-slate-200
                text-indigo-800 hover:text-opacity-70 border-indigo-800
                "
            >
                Login
            </a>
            <a
                href="{{ route('auth.sign-up') }}"
                class="px-4 py-2 text-white bg-indigo-800 border-indigo-800 hover:text-opacity-70 border-2"
            >
                Register
            </a>
        </div>
    </nav>
</header>
