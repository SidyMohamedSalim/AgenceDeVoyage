<div>
    <a href='/' class="relative my-4 hover:opacity-50 ">
        <div class="absolute top-2 right-2 text-xl flex items-center justify-center bg-white px-2 w-8 h-8 rounded-full ">
            <Heart />
        </div>


        <div>
            <img src='{{$tour->image}}' alt="" class="w-full h-72" width=600 height=600 />
        </div>
        <div>
            <h1 class="font-semibold hover:decoration-black hover:underline leading-5 line-clamp-2">
                {{$tour->title}}
            </h1>

            <div class="flex">

                <div class="flex justify-evenly gap-1 text-sm">
                    <p>⭐</p>
                    <p>⭐</p>
                    <p>⭐</p>
                    <p>⭐</p>
                    <p>⭐</p>
                </div>

                <p class="mx-2 font-light">{{$tour->rating}}</p>
            </div>

            <div>
                <p class="font-medium">á partir de {{$tour->price}} MAD par adulte</p>
            </div>
        </div>
    </a>
    <!-- The biggest battle is the war against ignorance. - Mustafa Kemal Atatürk -->
</div>
