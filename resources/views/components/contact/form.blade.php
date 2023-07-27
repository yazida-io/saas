<section class="pb-20">
    <form
        action="{{ route('actions.contact-us') }}"
        method="post"
        class="container max-w-sm space-y-7"
    >
        @csrf

        <div class="flex flex-col group">
            <label for="name">
                <span class="
                dark:group-focus-within:text-indigo-300
                group-focus-within:text-indigo-800
                ">
                    Name
                </span>
                <span class="text-rose-500">*</span>
            </label>
            <input
                class="
                bg-indigo-400/10 px-2 py-2 no-ring
                group-focus-within:bg-indigo-200/10 group-focus-within:border-indigo-800/70
                dark:bg-slate-600/10
                border border-indigo-400/10
                dark:border-slate-900/20
                dark:group-focus-within:border-indigo-800/70
                transition-colors duration-200 ease-in-out
                "
                type="text"
                name="name"
                id="name"
                value="{{ old('name') }}"
                placeholder="Your name"
            />
            @error('name')
            <p class="text-rose-500">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex flex-col group">
            <label for="email">
                <span class="
                dark:group-focus-within:text-indigo-300
                group-focus-within:text-indigo-800
                ">
                    Email
                </span>
                <span class="text-rose-500">*</span>
            </label>
            <input
                class="
                bg-indigo-400/10 px-2 py-2 no-ring
                group-focus-within:bg-indigo-200/10 group-focus-within:border-indigo-800/70
                dark:bg-slate-600/10
                border border-indigo-400/10
                dark:border-slate-900/20
                dark:group-focus-within:border-indigo-800/70
                transition-colors duration-200 ease-in-out
                "
                type="text"
                name="email"
                id="email"
                value="{{ old('email') }}"
                placeholder="Your email address"
            />
            @error('email')
            <p class="text-rose-500">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex flex-col group">
            <label for="message">
                <span class="group-focus-within:text-indigo-300">
                    Message
                </span>
                <span class="text-rose-500">*</span>
            </label>
            <textarea
                class="
                bg-indigo-400/10 px-2 py-2 no-ring
                group-focus-within:bg-indigo-200/10 group-focus-within:border-indigo-800/70
                dark:bg-slate-600/10
                border border-indigo-400/10
                dark:border-slate-900/20
                dark:group-focus-within:border-indigo-800/70
                transition-colors duration-200 ease-in-out
                "
                name="message"
                id="message"
                cols="30"
                rows="10"
                placeholder="Your message"
            >{{ old('message') }}</textarea>
            @error('message')
            <p class="text-rose-500">{{ $message }}</p>
            @enderror
        </div>

        <div class="space-y-3">
            <p class="text-sm text-indigo-800/70 dark:text-slate-200/30">
                We will get back to you as soon as possible
                <span class="text-xs">🤗</span>
            </p>
            <button
                type="submit"
                class="block w-full px-4 py-2 text-center text-white bg-indigo-800 hover:bg-opacity-70 focus:bg-indigo-600 transition-all duration-200 ease-in-out"
            >
                Send message
            </button>
        </div>
    </form>
</section>
