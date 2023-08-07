<x-mail::message>
# Hello {{ $user }},

Thanks for subscribing!

We're excited to have you on board. <br />
You can view your subscription details by clicking the button below.


<x-mail::button :url="$url">
    Download Invoice
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
