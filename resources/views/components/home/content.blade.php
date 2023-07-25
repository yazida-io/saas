<section class="py-20">
    <div class="container space-y-20">
        <div class="text-center mx-auto max-w-2xl space-y-5">
            <h2 class="text-5xl font-extrabold dark:text-white">
                Anywhere, any moment
            </h2>

            <p class="text-base">
                Listen on your terms on any device, whether you’re offline, <br/>
                off-the-beaten path, at home or in the car.
            </p>
        </div>

        <div class="space-y-10">
            <div class="w-full border-b-[1px] border-slate-400 flex justify-between items-center">
                @foreach($features as $feature)
                    <button class="flex-center gap-2 px-4 py-2 relative group">
                        <span
                            class="w-10 h-10 @if($loop->first) bg-indigo-400/10 @else bg-white/10 group-hover:bg-indigo-400/10 @endif"
                        ></span>
                        <span>{{ $feature['title'] }}</span>

                        <span
                            class="
                            absolute -bottom-[3px] w-2/3 h-[5px] bg-rose-500 rounded-xl
                            @if($loop->first) block @else hidden group-hover:block @endif
                            "
                        ></span>
                    </button>
                @endforeach
            </div>

            <div class="px-10">
                <div class="h-[500px] w-full rounded grid grid-cols-2 dark:bg-slate-400/20 bg-indigo-800/20">
                    <div class="p-10 max-w-xl flex justify-center items-start flex-col gap-4">
                        <h3 class="text-3xl font-bold dark:text-white">
                            You bring the passion. <br/>
                            We bring the music.
                        </h3>
                        <p class="text-base">
                            With over 80 million tracks, exclusive releases, and tons of interviews and music videos,
                            Tonality brings you closer to the artists you listen to.
                        </p>
                    </div>
                    <div class="relative pt-10 px-7 pb-0 overflow-hidden">
                        <div class="absolute top-20 right-20 w-1/2 h-20 bg-gradient-to-bl from-slate-700 to-indigo-900 flex-center shadow shadow-indigo-300/30">
                            <div class="flex-1 p-4">
                                <p class="font-bold">Morning Playlist</p>
                                <p>The best songs ever.</p>
                            </div>
                            <img
                                src="https://images.unsplash.com/photo-1574758519652-904df1f8df4c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=100&h=100&q=80"
                                alt=""
                                class="w-20 h-20 object-cover"
                            />
                        </div>
                        <img
                            class="w-9/12 h-full object-contain object-center"
                            src="https://images.unsplash.com/photo-1574758519652-904df1f8df4c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=719&q=80"
                            alt=""
                        />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
