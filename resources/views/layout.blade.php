<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="https://images.fineartamerica.com/images/artworkimages/medium/3/spongebob-squarepants-pastel-krusty-krab-lucas-amylee-transparent.png">
    <title>Krusty Krab || {{ $title }}</title>

    @vite('resources/css/app.css')    

    {{-- gfont --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">

    {{-- aos --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


    <style>
        .bangers-regular {
            font-family: "Bangers", system-ui;
            font-weight: 400;
            font-style: normal;
        }

        .glow-text {
            text-shadow: 0 0 15px rgba(255, 220, 128, 0.9),
                0 0 30px rgba(255, 200, 80, 0.8),
                0 0 45px rgba(255, 170, 60, 0.7);
            /* animation: glow-flicker 2s infinite alternate; */
        }

        .glow-text-2 {
            text-shadow: 0 0 10px #D98E57, 0 0 20px #D98E57, 0 0 30px #9C5B33, 0 0 40px #6A3B1E;
        }

    </style>

    @yield('header')

</head>
<body class="w-screen overflow-x-hidden relative ">
    
    <div class="w-screen h-[70px] fixed bg-gray-700 z-[999]">
        
        <div class="w-full h-full  flex justify-center items-center px-8 sm:px-16 py-2 z-[999]">
            <div class="h-full mr-auto flex items-center justify-center text-xl">
                <img class="h-full object-contain" src="https://images.fineartamerica.com/images/artworkimages/medium/3/spongebob-squarepants-pastel-krusty-krab-lucas-amylee-transparent.png" alt="">
                <p class="ml-2 bangers-regular text-white">Krusty Krab</p>
            </div>
            
            <ol class="text-white font-bold space-x-8 hidden sm:flex">
                <li class="underline underline-offset-8 {{ $title == 'Home' ? '!text-yellow-400' : '' }} "><a href="{{ route('home') }}">Home</a></li>
                <li class="underline underline-offset-8 {{ $title == 'About Us' ? '!text-yellow-400' : '' }}"><a href="{{ route('about.us') }}">About Us</a></li>
                <li class="underline underline-offset-8 {{ $title == 'Location' ? '!text-yellow-400' : '' }} "><a href="{{ route('location') }}">Location</a></li>
            </ol>

            <button class="sm:hidden" onclick="document.getElementById('nav-sm').classList.toggle('hidden')">
                <div class="w-[40px] h-[3px] bg-white"></div>
                <div class="w-[40px] h-[3px] bg-white my-2"></div>
                <div class="w-[40px] h-[3px] bg-white"></div>
            </button>

        </div>

        <ol id="nav-sm" class="flex flex-col fixed text-white font-bold sm:hidden bg-gray-700 p-4 w-full space-y-4 py-8 justify-center items-center hidden">
            <li class="underline underline-offset-8 {{ $title == 'Home' ? '!text-yellow-400' : '' }} "><a href="{{ route('home') }}">Home</a></li>
            <li class="underline underline-offset-8 {{ $title == 'About Us' ? '!text-yellow-400' : '' }}"><a href="{{ route('about.us') }}">About Us</a></li>
            <li class="underline underline-offset-8 {{ $title == 'Location' ? '!text-yellow-400' : '' }} "><a href="{{ route('location') }}">Location</a></li>
        </ol>

        
    </div>

    @yield('content')


    {{-- footer --}}
    <div class="bg-yellow-950 w-screen p-8 flex items-center">
        <div class="flex items-center">
            <img class="h-[150px] object-contain mr-2" src="https://images.fineartamerica.com/images/artworkimages/medium/3/spongebob-squarepants-pastel-krusty-krab-lucas-amylee-transparent.png" alt="">
            <h1 class="glow-text text-3xl md:text-4xl lg:text-5xl tracking-wider text-white bangers-regular">Krusty Krab</h1>
        </div>
        <div class="ml-auto">
            <p class="text-white">124 Conch Street, Bikini Bottom</p>
            <p class="text-white my-3">+88 8121238912631</p>
            <p class="text-white">since 1999</p>
        </div>
    </div>



    @yield('script')
    <script>
        AOS.init();

        
    </script>
</body>
</html>