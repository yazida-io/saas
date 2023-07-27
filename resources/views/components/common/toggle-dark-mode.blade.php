<button
    id="toggle-dark-mode"
    class="dark:text-slate-200/70 dark:hover:text-slate-500 dark:focus:text-slate-500 dark:active:text-slate-500 hover:text-indigo-800 focus:text-indigo-800 active:text-indigo-800"
>
    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24">
        <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
            <path d="M9.173 14.83a4 4 0 1 1 5.657-5.657"/>
            <path
                d="m11.294 12.707l.174.247a7.5 7.5 0 0 0 8.845 2.492A9 9 0 0 1 5.642 18.36M3 12h1m8-9v1M5.6 5.6l.7.7M3 21L21 3"/>
        </g>
    </svg>
</button>

@push("scripts")
    <script>
        const toggleDarkMode = document.querySelector("#toggle-dark-mode");

        toggleDarkMode.addEventListener("click", () => {
            if (localStorage.theme === "dark") {
                localStorage.theme = "light";
                document.documentElement.classList.remove("dark");
            } else {
                localStorage.theme = "dark";
                document.documentElement.classList.add("dark");
            }
        });
    </script>
@endpush
