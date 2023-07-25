<header
    class="fixed left-0 right-0 top-0 z-40 backdrop-blur-3xl bg-slate-200/20 dark:bg-black/20 border-b border-slate-200/20">
    <nav class="container flex justify-between items-center">
        <a href="{{ route('home')  }}">
            <x-logo/>
        </a>

        <div class="flex-center gap-4">
            @foreach($links as $link)
                <a
                    href="{{ route($link['route'] ?? 'home') }}"
                    class="
                    px-4 py-4 border-b-2
                    {{ request()->routeIs($link['route'] ?? 'home') ?
                        'text-indigo-800 border-indigo-800' :
                        'hover:text-indigo-800 border-transparent hover:border-indigo-800'
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
                class="px-4 py-2 text-slate-200 hover:text-opacity-70 border-2 hover:border-slate-200/70 border-slate-200"
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
