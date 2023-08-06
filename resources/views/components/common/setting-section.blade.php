<section class="py-7 space-y-7">
    <div class="container py-7 dark:bg-black bg-white space-y-7 relative">
        <h2 class="absolute -top-7 dark:bg-black bg-white text-2xl px-7 py-2 uppercase text-indigo-800 dark:text-indigo-500">
            {{ $title }}
        </h2>

        <div class="px-4 space-y-7">{{ $slot }}</div>
    </div>
</section>
