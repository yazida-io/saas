<div class="w-56 bg-white dark:bg-indigo-950/20 h-full flex flex-col shadow-[0_-7px_7px_0px_rgba(200,10,20,0.1)]">
    <div class="h-12 w-full flex-center sticky border-b-2 dark:border-white/10">
        <a href="{{ route('app.index') }}" class="w-full text-center">
            <x-logo class="h-10 w-auto inline"/>
        </a>
    </div>

    <div class="flex-1  space-y-0.5">
        @foreach($links as $link)
            <x-common.drawer-link
                :route="$link['route']"
                :icon="$link['icon']"
                :name="$link['name']"
                :badge="$link['badge'] ?? false"
            />
        @endforeach
    </div>

    <div class="flex justify-center items-stretch flex-col gap-y-0.5">
        @foreach($bottomLinks as $link)
            <x-common.drawer-link
                :route="$link['route']"
                :icon="$link['icon']"
                :name="$link['name']"
                :badge="$link['badge'] ?? false"
            />
        @endforeach

        <div class="
            dark:bg-indigo-800/10 flex items-center justify-stretch
            border-t border-slate-400/10 dark:border-white/20
        ">
            <x-common.toggle-dark-mode class="flex-1 flex-center py-2 border-r border-slate-400/10 dark:border-white/20"/>
            <x-common.collapse-drawer class="flex-1 flex-center py-2"/>
        </div>
    </div>
</div>
