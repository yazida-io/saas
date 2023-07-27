<section {{ $attributes->class(['pb-20 pt-10']) }}>
    <div class="container space-y-10 border-t pt-10 dark:border-indigo-800/30 ">
        <h2 class="text-5xl font-bold dark:text-white text-left">
            Ethos - 5 Things we value
        </h2>

        <p>
            Sharing values that bring people together is a great way to build a strong community.
        </p>

        <div class="grid grid-cols-1 md:grid-cols-5 gap-7">
            <x-about.value title="Always be nice and respectful to others" icon="🤗" />
            <x-about.value title="Believe in dreams will becoming a reality" icon="💡" />
            <x-about.value title="Care and share with the less fortunate" icon="💰" />
            <x-about.value title="Own it! even if it's a mistake" icon="❤️" />
            <x-about.value title="Always cultivate and learn daily" icon="📖" />
        </div>
    </div>
</section>
