<div {{ $attributes->merge(['class' => 'relative']) }}>
    <div class="absolute -top-2 right-5 w-8 h-8 bg-indigo-500 text-white flex-center">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current w-6 h-6">
            <path
                d="M23,12L20.56,9.22L20.9,5.54L17.29,4.72L15.4,1.54L12,3L8.6,1.54L6.71,4.72L3.1,5.53L3.44,9.21L1,12L3.44,14.78L3.1,18.47L6.71,19.29L8.6,22.47L12,21L15.4,22.46L17.29,19.28L20.9,18.46L20.56,14.78L23,12M10,17L6,13L7.41,11.59L10,14.17L16.59,7.58L18,9L10,17Z"/>
        </svg>
    </div>

    <p class="bg-indigo-500/20 p-4 text-center text-xl text-indigo-500">
        You currently subscribed to <strong>{{ auth()->user()->plan->name }}</strong> plan 🎉
    </p>
</div>
