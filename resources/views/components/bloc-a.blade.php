<div class=" relative  my-4 mr-2 shadow-2xl rounded-sm">
    <div class="opacity-90">
        <img src='{{ $tour->image }}' alt="" class=" md:h-64 rounded-sm w-full" width=600 height=600 />
        <div class="text-xs flex justify-between text-center items-center px-3 pt-3">
            <div class="flex  gap-1 items-center">
{{--                <MapPin class="text-[0.3rem] text-sky-300" size={22} />--}}
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
                <h3>{{$tour->city}}-{{ $tour->country }}</h3>
            </div>
            <div class="flex   gap-1 items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="orange" stroke="orange" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                <h3>{{$tour->rating}}</h3>
            </div>
        </div>
        <div class="p-3">
            <h1 class=" w-full  font-semibold bg text-xl line-clamp-2">
                {{$tour->title}}
            </h1>
        </div>

        <div class="px-3 pb-2 flex justify-between items-center">
            <h4 class="text-sm">
                <span class="text-sky-400 text-base font-bold">
                    ${{$tour->price}}
                </span>
                /person
            </h4>
            <a href='' class="bg-sky-400 hover:bg-sky-600 px-2 py-1 text-sm text-white rounded-md">
                Voir plus
            </a>
        </div>
    </div>
</div>
