<button
    id='collapse-drawer'
    {{ $attributes->merge(['class' => "dark:text-slate-200/70 dark:hover:text-slate-500 dark:focus:text-slate-500 dark:active:text-slate-500 hover:text-indigo-800 focus:text-indigo-800 active:text-indigo-800"])  }}
>
    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 512 512">
        <path fill="currentColor" d="M32 96v64h448V96H32zm0 128v64h448v-64H32zm0 128v64h448v-64H32z"/>
    </svg>
</button>

@push("scripts")
    <script>

    </script>
@endpush
