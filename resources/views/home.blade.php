<!-- Fonts -->
<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
@extends('layout')


@section('content')
    <div>

        <div>
            <div class="max-md:w-full max-w-5xl mx-auto mb-28">
                <div class=" mx-auto flex max-md:flex-col max-md:px-0 justify-between items-center max-xl:px-4 pt-24">

                    <div class="w-[48%] pr-6 max-md:px-6 max-md:w-full max-md:text-center">
                        <div class="bg-orange-200 w-fit px-4 py-2 rounded-full font-[cursive]">
                            Melleure Opportunite
                        </div>
                        <h1 class="font-semibold text-4xl py-6 space-x-4 leading-10">
                            Traveling opens the door to creating
                            <span class="text-orange-400">memories</span>
                        </h1>
                        <p class="text-sm font-light leading-7">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                            Provident ducimus voluptatem dicta laborum ratione aspernatur
                            voluptas corporis natus asperiores veritatis eius vero, et soluta
                            porro sunt autem inventore libero delectus.
                        </p>
                    </div>

                    <div class="w-[55%] flex max-md:px-4 max-md:w-full max-md:mt-10">
                        <div class="mr-4">
                            <img class="w-96  h-60 mr-5 border-2 border-black rounded-3xl" width=300 height=700
                                alt="" src="/images/tour-img01.jpg" />
                        </div>
                        <div class="mt-10 mr-4">
                            <img class="w-96 h-60  border-black   border-2 rounded-3xl" width=300 height=700 alt=""
                                src="/images/gallery-01.jpg" />
                        </div>
                        <div class="mt-20">
                            <img class="w-96 h-60 border-2 border-black s rounded-3xl" width=300 height=700 alt=""
                                src="/images/hero-img02.jpg" />
                        </div>
                    </div>
                </div>
            </div>



            <div class="bg-slate-50 bg-cover  h-[40rem] my-20 ">
                <div class="w-full h-full flex">
                    <form class="max-w-5xl mx-auto flex flex-col items-center justify-center w-fit ">
                        <h1 class="py-2 px-2 italic text-4xl font-light text-center  leading-[3rem]">
                            Planifier votre voyage avec le meilleur conseiller Touristique
                        </h1>

                        <h3 class="text-orange-400  font-extrabold text-xl pb-6">
                            Votre Voyage Notre Passion
                        </h3>
                        <div class="py-3 w-[80%]">
                            <input type="text" placeholder="Destination" class="w-full p-2 rounded-md" />
                        </div>
                        <div class="py-3 w-[80%]">
                            <input type="date" placeholder="Date de depart" class="w-full p-2 rounded-md" />
                        </div>
                        <div class="py-3 w-[80%]">
                            <input type="date" placeholder="Date de retour" class=" p-2 rounded-md w-full" />
                        </div>

                        <div class="bg-white flex w-[80%] items-center justify-between my-3 px-2 rounded-md ">
                            <h1>Personne</h1>
                            <div class="flex justify-between items-center w-[78%] ">
                                <div class="bg-slate-300 text-center rounded-full p-2">
                                    <span>
                                        <i data-lucide-name="minus"></i>
                                    </span>
                                </div>
                                <div>
                                    <input type="number" placeholder="0" class="w-12 pl-3 focus:outline-non border-none"
                                        min=1 max=9 />
                                </div>
                                <div class="bg-slate-300 text-center rounded-full p-2">
                                    <span>
                                        <i data-lucide-name="plus"></i>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="py-3 w-[80%]">
                            <input type="submit"
                                class="bg-orange-400 hover:bg-orange-500 px-1 py-2  text-center text-white rounded-lg p-2 w-full text-lg"
                                value="Rechercher" />
                        </div>
                    </form>
                </div>
            </div>

        </div>

        <section class="relative my-28">
            <div class="max-w-5xl mx-auto my-4 h-84 bg-covers">
                <div class="mx-6">

                    <div>
                        <h1 class="font-semibold text-4xl mb-1">
                            Les meilleures activités pour vous
                        </h1>
                        <p class="text-md py-3">
                            Les Laureats Travellers&apos;Choice Best of the Best
                        </p>
                    </div>

                    <div class="grid  sm:grid-cols-2 md:grid-cols-3  gap-4">

                        @foreach ($toursBest as $tour)
                            <x-blocA :tour="$tour"></x-blocA>
                        @endforeach

                    </div>
                </div>
            </div>
        </section>

        <div class="bg-slate-100 my-28">
            <div class="max-w-5xl mx-auto grid grid-cols-4 max-md:grid-cols-3 gap-4 px-3 pt-20 pb-10 ">
                <div class="pr-4 max-md:col-span-3 text-center">
                    <h2 class="font-second text-xl text-orange-300">
                        What We serve ?
                    </h2>
                    <h2 class="text-3xl font-semibold italic">
                        We offer our best services
                    </h2>
                </div>
                <div class="sha shadow-sm shadow-orange-400 p-3 bg-slate-50">
                    <div class="text-white bg-orange-400 w-fit p-1 rounded-full">
                        <Cloud class="text-sm" />
                    </div>
                    <h1 class="text-base font-semibold py-2">Calculate Weather</h1>
                    <p class="text-sm font-extralight">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi
                    </p>
                </div>
                <div class="sha shadow-sm shadow-orange-400 p-3 bg-slate-50">
                    <div class="text-white bg-orange-400 w-fit p-1 rounded-full">
                        <Cloud class="text-sm" />
                    </div>
                    <h1 class="text-base font-semibold py-2">Calculate Weather</h1>
                    <p class="text-sm font-extralight">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi
                    </p>
                </div>
                <div class="sha shadow-sm shadow-orange-400 p-3 bg-slate-50">
                    <div class="text-white bg-orange-400 w-fit p-1 rounded-full">
                        <Cloud class="text-sm" />
                    </div>
                    <h1 class="text-base font-semibold py-2">Calculate Weather</h1>
                    <p class="text-sm font-extralight">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi
                    </p>
                </div>
            </div>
        </div>


        <section class="relative my-28 mx-3">
            <div class="max-w-5xl mx-auto my-4 h-84 bg-covers">
                <div class="">

                    <div>
                        <h1 class="font-semibold text-4xl mb-1">
                            Nos offres du moment
                        </h1>
                        <p class="text-md py-3">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </p>
                    </div>

                    <div class="grid  max-md:grid-cols-2 grid-cols-3  gap-4">
                        @foreach ($toursNews as $tour)
                            <x-blocB :tour='$tour'></x-blocB>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <section class="relative my-28 py-5 bg-slate-100">
            <div class="max-w-5xl mx-auto my-4 h-84 bg-covers">
                <div class="mx-3">

                    <div>
                        <h1 class="font-semibold text-4xl mb-1">Why Choose Us</h1>
                        <p class="text-md py-3">
                            The gladdest moment in human life, me thinks, is a departure into
                            unknown lands.
                        </p>
                    </div>

                    <div class="grid grid-cols-4 grid-rows-4  gap-4 md:gap-2">
                        <div class=" row-span-2 col-span-4 md:col-span-2 md:row-span-4 ">
                            <img src="/tour-images/tour-img01.jpg" alt="" width=8000 height=9000
                                class="w-full h-full" />
                        </div>
                        <div class=" row-span-1 col-span-2 md:col-span-1 md:row-span-2">
                            <img src="/tour-images/tour-img05.jpg" alt="" width=8000 height=9000
                                class="w-full h-full" />
                        </div>
                        <div
                            class=" row-span-1 col-span-2  flex bg-white justify-center items-center flex-col text-center px-3 md:col-span-1 md:row-span-2">
                            <Globe2 class="mb-2 mt-4" size=30 color="orange" />
                            <h1 class="text-2xl font-medium py-2 italic">
                                Passionate Travel
                            </h1>
                            <p class="text-sm px-3 py-2 font-extralight">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor,
                                soluta.
                            </p>
                        </div>
                        <div
                            class=" row-span-1 col-span-2 bg-white flex justify-center items-center flex-col text-center px-3 md:col-span-1 md:row-span-2">
                            <LocateFixed class="my-2" size=30 color="orange" />
                            <h1 class="text-2xl font-medium py-2 italic">
                                Beautiful Place
                            </h1>
                            <p class="text-sm px-3 py-2 font-extralight">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor,
                                soluta.
                            </p>
                        </div>
                        <div class=" row-span-1 col-span-2 md:col-span-1 md:row-span-2">
                            <img src="/tour-images/tour-img02.jpg" alt="" width=8000 height=9000
                                class="w-full h-full" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
