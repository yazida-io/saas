<section class="h-screen grid grid-cols-5 py-20">
    <div class="col-span-3 flex-center flex-col">
        <div class="w-3/5 space-y-14">
            <div class="space-y-4">
                <h2 class="text-5xl dark:text-slate-200">
                    You bring the passion. <br />
                    We bring the music.
                </h2>
                <p class="text-xl">
                    Check out original playlists hand-picked by our team of experts, or stream guest playlists curated by
                    the artists you love.
                </p>
            </div>
            <div class="grid grid-cols-2 gap-4 w-full">
                @foreach($features as $feature)
                    <div
                        class="space-y-5 p-7 rounded-xl relative
                        @if($loop->first) bg-indigo-800 text-white border-indigo-800 @else bg-slate-500/20 border-slate-400/20 border-2 @endif
                    ">
                        <h6 class="text-xl font-bold dark:text-slate-100">
                            {{$feature['title']}}
                        </h6>
                        <p>{{$feature['description']}}</p>

                        @if($loop->first)
                            <span class="absolute -bottom-1 w-1/2 h-2 bg-rose-500 rounded-xl"></span>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="col-span-2 bg-indigo-800/10 dark:bg-slate-200/10 relative flex-center">
        <div class="h-2/3 w-full bg-white -left-40 absolute">
            <img
                class="w-full h-full object-cover"
                src="https://images.unsplash.com/photo-1593508512255-86ab42a8e620?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=878&q=80"
                alt=""
            />
        </div>
    </div>
</section>
