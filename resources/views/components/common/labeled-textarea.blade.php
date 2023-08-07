<div class="flex flex-col group">
    <label for="{{ $id ?? $name }}">
        <span class="dark:group-focus-within:text-indigo-300 group-focus-within:text-indigo-800">
            {{ $label }}
        </span>
        @if($required ?? false)
            <span class="text-rose-500">*</span>
        @endif
    </label>
    <textarea
        class="
            bg-indigo-400/10 px-2 py-2 no-ring
            group-focus-within:bg-indigo-200/10 group-focus-within:border-indigo-800/70
            dark:bg-slate-600/10
            border border-indigo-400/10
            dark:border-slate-900/20
            dark:group-focus-within:border-indigo-800/70
            transition-all duration-200 ease-in-out
            group-hover:placeholder-indigo-400/70
        "
        {{ ($rows = $rows ?? 3) > 1 ? 'rows=' . $rows : '' }}
        name="{{ $name }}"
        id="{{ $id ?? $name }}"
        placeholder="{{ $placeholder }}"
        {{ ($required ?? false) ? 'required' : '' }}
        {{ ($readonly ?? false) ? 'readonly' : '' }}
    >{{ $value ?? old($name) }}</textarea>

    @error($name)
    <p class="text-rose-500">{{ $message }}</p>
    @enderror
</div>
