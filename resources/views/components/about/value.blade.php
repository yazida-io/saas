<div class="
h-96 relative p-7 text-3xl overflow-hidden group text-opacity-25 border flex-center
border-indigo-950/70 dark:border-indigo-800/30
">
    <p class="text-4xl text-indigo-950/70 dark:text-inherit">{{ $title }}</p>

    <span class=" absolute group-hover:bottom-0 -bottom-10 group-hover:left-0 -left-10 transition-all duration-500 ease-in-out">{{ $icon ?? '' }}</span>
    <span class="absolute group-hover:bottom-0 -bottom-10 group-hover:right-0 -right-10 transition-all duration-500 ease-in-out">{{ $icon ?? '' }}</span>
    <span class="absolute group-hover:top-0 -top-10 group-hover:left-0 -left-10 transition-all duration-500 ease-in-out">{{ $icon ?? '' }}</span>
    <span class="absolute group-hover:top-0 -top-10 group-hover:right-0 -right-10 transition-all duration-500 ease-in-out">{{ $icon ?? '' }}</span>
</div>
