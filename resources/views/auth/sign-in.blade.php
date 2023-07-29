@extends('layouts.default')

@section('content')
    <section class="flex-center flex-col h-full">
        <div class="w-[29rem] py-20 space-y-7">
            <div class="text-center space-y-4">
                <h1 class="text-4xl text-center text-white">Sign In</h1>
                <p>
                    Welcome back! Please sign in to your account.
                </p>
            </div>

            <div class="flex-center gap-4 font-bold">
                <a
                    href="#"
                    class="flex-1 border-2 flex-center gap-2 flex-nowrap py-1.5 bg-slate-800 border-slate-200/20"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 256 262">
                        <path fill="#4285F4"
                              d="M255.878 133.451c0-10.734-.871-18.567-2.756-26.69H130.55v48.448h71.947c-1.45 12.04-9.283 30.172-26.69 42.356l-.244 1.622l38.755 30.023l2.685.268c24.659-22.774 38.875-56.282 38.875-96.027"/>
                        <path fill="#34A853"
                              d="M130.55 261.1c35.248 0 64.839-11.605 86.453-31.622l-41.196-31.913c-11.024 7.688-25.82 13.055-45.257 13.055c-34.523 0-63.824-22.773-74.269-54.25l-1.531.13l-40.298 31.187l-.527 1.465C35.393 231.798 79.49 261.1 130.55 261.1"/>
                        <path fill="#FBBC05"
                              d="M56.281 156.37c-2.756-8.123-4.351-16.827-4.351-25.82c0-8.994 1.595-17.697 4.206-25.82l-.073-1.73L15.26 71.312l-1.335.635C5.077 89.644 0 109.517 0 130.55s5.077 40.905 13.925 58.602l42.356-32.782"/>
                        <path fill="#EB4335"
                              d="M130.55 50.479c24.514 0 41.05 10.589 50.479 19.438l36.844-35.974C195.245 12.91 165.798 0 130.55 0C79.49 0 35.393 29.301 13.925 71.947l42.211 32.783c10.59-31.477 39.891-54.251 74.414-54.251"/>
                    </svg>
                    <span class="text-no-wrap text-slate-400">
                        Sign in with Google
                    </span>
                </a>
                <a
                    href="#"
                    class="flex-1 border-2 flex-center gap-2 flex-nowrap py-1.5 bg-slate-800 border-slate-200/20"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24">
                        <path fill="currentColor"
                              d="M18.71 19.5c-.83 1.24-1.71 2.45-3.05 2.47c-1.34.03-1.77-.79-3.29-.79c-1.53 0-2 .77-3.27.82c-1.31.05-2.3-1.32-3.14-2.53C4.25 17 2.94 12.45 4.7 9.39c.87-1.52 2.43-2.48 4.12-2.51c1.28-.02 2.5.87 3.29.87c.78 0 2.26-1.07 3.81-.91c.65.03 2.47.26 3.64 1.98c-.09.06-2.17 1.28-2.15 3.81c.03 3.02 2.65 4.03 2.68 4.04c-.03.07-.42 1.44-1.38 2.83M13 3.5c.73-.83 1.94-1.46 2.94-1.5c.13 1.17-.34 2.35-1.04 3.19c-.69.85-1.83 1.51-2.95 1.42c-.15-1.15.41-2.35 1.05-3.11Z"/>
                    </svg>

                    <span class="text-no-wrap text-slate-400">
                        Sign in with Apple
                    </span>
                </a>
            </div>

            <div class="flex-center gap-4">
                <div class="flex-1 border border-indigo-800/70 dark:border-slate-200/30"></div>
                <p class="text-center text-indigo-800/70 dark:text-slate-200/70 text-base uppercase">
                    or
                </p>
                <div class="flex-1 border border-indigo-800/70 dark:border-slate-200/30"></div>
            </div>

            <div>
                <form
                    action="{{ route('auth.authenticate') }}"
                    method="post"
                    class="space-y-7"
                >
                    @csrf

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
                            type="email"
                            name="email"
                            id="email"
                            value="{{ old('email') }}"
                            placeholder="Your email"
                        />
                        @error('email')
                        <p class="text-rose-500">{{ $message }}</p>
                        @enderror
                    </div>


                    <div class="flex flex-col group">
                        <label for="password">
                <span class="
                dark:group-focus-within:text-indigo-300
                group-focus-within:text-indigo-800
                ">
                    Password
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
                            type="password"
                            name="password"
                            id="password"
                            value=""
                            placeholder="Your password"
                        />
                        @error('password')
                        <p class="text-rose-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex justify-between items-center group">
                        <div>
                            <input
                                type="checkbox"
                                name="remember"
                                id="remember"
                            />
                            <label for="remember">
                            <span class=" dark:group-focus-within:text-indigo-300 group-focus-within:text-indigo-800">
                                Remember me
                            </span>
                            </label>
                        </div>
                        <div>
                            <a
                                href="{{ '#' }}"
                                class="text-indigo-800/70 dark:text-slate-200/70 hover:text-indigo-800/80 dark:hover:text-slate-200/80 transition-colors duration-200 ease-in-out"
                            >
                                Forgot password?
                            </a>
                        </div>
                    </div>


                    <div class="space-y-3">
                        <button
                            type="submit"
                            class="block w-full px-4 py-2 text-center text-white bg-indigo-800 hover:bg-opacity-70 focus:bg-indigo-600 transition-all duration-200 ease-in-out"
                        >
                            Sign in
                        </button>
                        <p class="text-sm text-indigo-800/70 dark:text-slate-200/30 text-center">
                            Don’t have an account yet?
                            <a
                                href="{{ route('auth.sign-up') }}"
                                class="text-indigo-800/70 dark:text-slate-200/70 hover:text-indigo-800/80 dark:hover:text-slate-200/80 transition-colors duration-200 ease-in-out"
                            >
                                Sign up
                            </a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
