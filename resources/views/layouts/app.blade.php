<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        @yield('title', 'Dashboard')
    </title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>

    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark')
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>

    @bukStyles
    @bukScripts
</head>
<body class="
h-screen w-screen overflow-hidden text-black bg-white dark:bg-black dark:text-slate-200 flex-center
">
<x-app.drawer/>

<main class="flex-1 dark:bg-white/5 bg-slate-100 overflow-hidden h-screen">
    @yield('content')
</main>

@stack('scripts')
</body>
</html>
