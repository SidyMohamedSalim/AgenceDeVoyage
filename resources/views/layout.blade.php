<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | Agence de voyage</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header>
        <div class="max-w-5xl mx-auto max-md:flex-col flex items-center justify-between py-3 ">
            <div class="flex justify-between  items-center max-md:w-full max-md:items-center max-md:px-3">
                <a href="/" class=" ">
                    <img width=300 height=200 class="w-28" src="/images/logo.png" alt="" />
                </a>
                <div class=" md:hidden flex items-center gap-2">
                    <button class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 ">
                        <svg class="fill-current h-3 w-3 transition rotate-90 duration-150 ease-in-out"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>Menu</title>
                            <path d="M0 0h20v20H0V0zm2 9h16v2H2V9zm0-5h16v2H2V4zm0 10h16v2H2v-2z" fillRule="evenodd" />
                        </svg>

                    </button>
                </div>
            </div>


            <div
                class=" flex flex-col items-center justify-center  text-center  gap-1 md:hidden w-full bg-slate-100 py-3">
                <nav class=" text-md font-light w-full ">
                    <div class="py-2 my-1 items-center flex flex-col hover:bg-white w-full">
                        <a href="/" class="px-4 text-orange-500 w-full">
                            Home
                        </a>
                    </div>

                    <div class="py-2 my-1 hover:bg-white">
                        <a href="/tours" class="px-4  w-full">
                            Découvrir
                        </a>
                    </div>
                    <div class="py-2 my-1 hover:bg-white w-full">
                        <a href="/about" class="px-4 w-full">
                            About
                        </a>
                    </div>
                </nav>



                <div class="">
                    <div class="py-2 my-1 hover:bg-white">
                        <a class="font-semibold p-4" href="/auth/login">
                            Login
                        </a>
                    </div>
                    <div class="py-2 my-1">
                        <a class="bg-orange-400 rounded-2xl px-4 py-2" href="/auth/register">
                            Register
                        </a>
                    </div>
                </div>

            </div>



            <div class="flex justify-evenly gap-12 max-md:hidden">
                <nav class="mr-14 text-md font-light">
                    <a href="/" class="px-4 text-orange-500">
                        Accueil
                    </a>
                    <a href="/tours" class="px-4">
                        Découvrir
                    </a>
                    <a href="/about" class="px-4">
                        A propos
                    </a>
                </nav>
                <div class="">



                    <a class="font-semibold p-4" href="/auth/login">
                        Login
                    </a>
                    <a class="bg-orange-400 rounded-2xl px-4 py-2 mx-2" href="/auth/register">
                        Register
                    </a>


                </div>
            </div>


        </div>

    </header>
    <div>
        @yield('content')
    </div>
</body>

</html>
