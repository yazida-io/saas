<header class="sticky top-0 backdrop-blur-3xl bg-white/20 shadow">
    <nav class="container flex justify-between items-center text-primary">
        <a href="{{ route('home')  }}">
            <x-logo />
        </a>

        <div class="flex-center gap-4">
            @foreach($links as $link)
                <a
                    href="{{ route($link['route'] ?? 'home') }}"
                    class="
                    px-4 py-4 hover:text-primary text-primary-text border-b-2 hover:border-primary
                    {{ request()->routeIs($link['route'] ?? 'home') ? 'text-primary border-primary' : ' border-transparent' }}
                    "
                >
                    {{ $link['name'] }}
                </a>
            @endforeach
        </div>

        <div class="flex-center gap-4">
            <a
                href="{{ route('auth.sign-in') }}"
                class="px-4 py-2 text-primary hover:text-primary border-2 border-primary/70 hover:border-primary"
            >Login</a>
            <a
                href="{{ route('auth.sign-up') }}"
                class="px-4 py-2 text-white bg-primary border-primary hover:text-primary-text border-2"
            >Register</a>
        </div>
    </nav>

</header>
