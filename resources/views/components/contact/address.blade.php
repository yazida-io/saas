<div {{ $attributes->class(['bg-white/1 md:pr-4 py-10 flex-center relative group']) }}>
    <p
        class="
                    absolute opacity-50 top-10 left-4 px-4 border border-slate-200/10 transform -rotate-[19deg] transition-all duration-300 ease-in-out
                    group-hover:-rotate-90 group-hover:translate-x-2 group-hover:translate-y-2 group-hover:scale-150 group-hover:block group-hover:opacity-100
                    "
    > {{ $name }} </p>

    {{$slot ?? ''}}
</div>
