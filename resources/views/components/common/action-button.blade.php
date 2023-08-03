<button
    type="{{ $type ?? 'submit' }}"
    {{
        $attributes->merge([
            'class' => "
            block w-full px-4 py-2 text-center
            text-white bg-indigo-800
             hover:bg-opacity-70 focus:bg-indigo-600
              transition-all duration-200 ease-in-out
            "
        ])
    }}
>
    {{ $text }}
</button>
