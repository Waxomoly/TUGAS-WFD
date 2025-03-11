@extends('layout')


@section('header')
    <style>
        @keyframes upDown {
            0% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-10px);
            }
            100% {
                transform: translateY(0px);
            }
        }

        #scrollIndicator {
            animation: upDown 3s infinite alternate;
        }
    </style>
@endsection


@section('content')
    
<main class="w-full min-h-screen">
    <div class="w-full h-screen flex flex-col justify-center items-center relative">
        <img class="blur-[1px] w-full h-full object-cover absolute z-[-10]" src="https://preview.redd.it/bivk8d88ahu41.jpg?auto=webp&s=b88dc5efc909d4177d62b55129a93f94038ffe9a" alt="">
        <h1 class="glow-text text-5xl md:text-6xl lg:text-9xl tracking-wider text-white bangers-regular">Krusty Krab</h1>
        <p class="text-white font-semibold drop-shadow-sm mt-2">Best Fast Food in Bikini Bottom since 1999</p>
        <div id="scrollIndicator"
            class="absolute bottom-20 text-white cursor-pointer flex flex-col items-center text-base sm:text-lg lg:text-xl z-10">
            <span class="mb-[-0.3em] md:mb-[-0.1em] lg:mb-0 font-garamond drop-shadow-lg">Scroll For More</span>
            <svg id="arrowDown"
                class="w-6 h-6 md:w-[2.2rem] md:h-[2.2rem] xl:w-6 xl:h-6 2xl:w-[2.5rem] 2xl:h-[2.5rem]"
                width="100" height="100" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6 8l6 6 6-6" stroke="white" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
                <path d="M6 12l6 6 6-6" stroke="white" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" opacity="0.5" />
            </svg>
        </div>
    </div>

    


    <div class="w-full min-h-screen flex flex-col justify-center items-center relative bg-yellow-800 py-16 px-8  lg:py-20">
        <p class="mb-16 text-3xl md:text-4xl lg:text-5xl bangers-regular text-white tracking-wider glow-text-2">OUR MENU</p>
        <div class="grow grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 w-full">

            {{-- item 1 --}}
            <div class="bg-white w-full h-full rounded-lg overflow-hidden">
                <div class="h-[150px] sm:h-[250px]"> 
                    <img class="w-full h-full object-cover" src="https://i.pinimg.com/originals/2d/b3/c5/2db3c523682d32a78d48ecf28250effb.png" alt="">
                </div>

                <div class="p-4">
                    <div class="flex">
                        <p class="text-lg sm:text-2xl mb-4 font-bold">Krabby Patty</p>
                        <p class="ml-auto">$1.25</p>
                    </div>
                    {{-- description --}}
                    <p class="text-sm sm:text-base">Mouth-watering delicious authentic traditional burger with mustard, lettuce, tomato, onions, pickles, cheese, patty, and our homemade buns. </p>
                </div>
                
            </div>


            {{-- item 2 --}}
            <div class="bg-white w-full h-full rounded-lg overflow-hidden">
                <div class="h-[150px] sm:h-[250px]"> 
                    <img class="w-full h-full object-cover" src="https://tse1.mm.bing.net/th?id=OIP.GupWRNtzys7HVQ2389VnkAHaFP&pid=Api&P=0&h=180" alt="">
                </div>

                <div class="p-4">
                    <div class="flex">
                        <p class="text-lg sm:text-2xl mb-4 font-bold">Coral Bits</p>
                        <p class="ml-auto">$1.25</p>
                    </div>
                    {{-- description --}}
                    <p class="text-sm sm:text-base">Crunchy coral bits, fresh from the bikini bottom waters.</p>
                </div>
                
            </div>



            {{-- item 3 --}}
            <div class="bg-white w-full h-full rounded-lg overflow-hidden">
                <div class="h-[150px] sm:h-[250px]"> 
                    <img class="w-full h-full object-cover" src="https://i.redd.it/9jvvst99lk381.jpg" alt="">
                </div>

                <div class="p-4">
                    <div class="flex">
                        <p class="text-lg sm:text-2xl mb-4 font-bold">Kelp Shake</p>
                        <p class="ml-auto">$2.00</p>
                    </div>
                    {{-- description --}}
                    <p class="text-sm sm:text-base">Not like other kelps!</p>
                </div>
                
            </div>


            {{-- item 4 --}}
            <div class="bg-white w-full h-full rounded-lg overflow-hidden">
                <div class="h-[150px] sm:h-[250px]"> 
                    <img class="w-full h-full object-cover" src="http://vignette3.wikia.nocookie.net/spongebob/images/c/cf/Close_Up_Of_Kids_Meal.png/revision/latest?cb=20130718175018" alt="">
                </div>

                <div class="p-4">
                    <div class="flex">
                        <p class="text-lg sm:text-2xl mb-4 font-bold">Krabby Meal</p>
                        <p class="ml-auto">$3.50</p>
                    </div>
                    {{-- description --}}
                    <p class="text-sm sm:text-base"><b class="font-bold">NOW WITH TOYS!</b> Our signature Krabby Patty, with a side of fried kelp.</p>
                </div>
                
            </div>



            {{-- item 5 --}}
            <div class="bg-white w-full h-full rounded-lg overflow-hidden">
                <div class="h-[150px] sm:h-[250px]"> 
                    <img class="w-full h-full object-cover" src="https://tse2.mm.bing.net/th?id=OIP.NjyE2vXpoWcItjFRVcbpSgHaE4&pid=Api&P=0&h=180" alt="">
                </div>

                <div class="p-4">
                    <div class="flex">
                        <p class="text-lg sm:text-2xl mb-4 font-bold">Golden Loaf</p>
                        <p class="ml-auto">$2.00</p>
                    </div>
                    {{-- description --}}
                    <p class="text-sm sm:text-base">Fried! Golden! thing?</p>
                </div>
                
            </div>
            
        </div>
    </div>


    <div class="w-full min-h-screen flex flex-col items-center relative bg-yellow-800 py-16 px-8  lg:py-20">
        <p class="mb-16 text-3xl md:text-4xl lg:text-5xl bangers-regular text-white tracking-wider glow-text-2">UPCOMING EVENT</p>
        <img class="max-h-[400px]" src="https://i.redd.it/yaxr2tu6f1gc1.jpeg" alt="">
        <p class="mt-6 text-white drop-shadow-lg font-bold text-base sm:text-lg lg:text-xl">Boys Don't Cry Tribute</p>
        <p class="mt-2 text-white drop-shadow-lg text-sm sm:text-base lg:text-lg">March 15th 2025 22:30</p>
    </div>


</main>

   

    
@endsection


@section('script')

@endsection