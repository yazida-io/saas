<section class="container">
    <div
        class="border-y p-4 border-slate-400/20 grid grid-cols-1 md:grid-cols-2 divide-y md:divide-x md:divide-y-0 dark:divide-amber-50/10">
        <x-contact.address name="Address">
            <address>
                <p>
                    <strong>{{ config('app.name') }}</strong>
                </p>
                <p>
                    1234 Example Street<br>
                    Antartica, Example 0987<br>
                </p>
                <p>
                    <abbr title="Phone">P:</abbr> (123) 456-7890
                </p>
            </address>
        </x-contact.address>

        <x-contact.address name="Contact">
            <address>

                <p>
                    <strong>{{ config('app.name') }}</strong>
                </p>
                <p>
                    <abbr title="Phone">Phone:</abbr>
                    <a href="tel:+914123456765">+33(0) 1-23-45-67-89</a>
                </p>
                <p>
                    <abbr title="Email">Email:</abbr>
                    <a href="mailto:{{ config('mail.from.address') }}">{{ config('mail.from.address') }}</a>
                </p>
            </address>
        </x-contact.address>
    </div>
</section>
