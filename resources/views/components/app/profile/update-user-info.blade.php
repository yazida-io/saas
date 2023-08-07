<x-common.setting-section title="Information">
    <form
        action="{{ route('app.settings.profile.update') }}"
        method="post"
        class="space-y-7"
        enctype="multipart/form-data"
    >
        @csrf

        @if(auth()->user()->avatar)
            <img
                src="{{ asset('storage/avatars/' . auth()->user()->avatar) }}"
                alt="{{ auth()->user()->name  }}"
                class="w-24 h-24 rounded-full"
            />
        @endif

        <x-common.labeled-input
            label="Profile Image"
            name="avatar"
            type="file"
            placeholder="Your profile image"
        />

        <x-common.labeled-input
            label="Email"
            name="email"
            type="email"
            value="{{ auth()->user()->email }}"
            placeholder="Your email"
            readonly
            required
        />

        <x-common.labeled-input
            required
            label="Name"
            name="name"
            type="text"
            value="{{ auth()->user()->name }}"
            placeholder="Your name"
        />

        <x-common.labeled-textarea
            rows="7"
            label="Your Bio"
            name="description"
            placeholder="Your bio"
            value="{{ auth()->user()->description }}"
        />

        <x-common.labeled-select
            :options="auth()->user()->languages()"
            label="Language"
            name="language"
            placeholder="Your language"
            value="{{ auth()->user()->language }}"
        />

        <x-common.action-button text="Save"/>
    </form>
</x-common.setting-section>
