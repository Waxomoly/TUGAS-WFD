@extends('layout')

@section('header')

@endsection

@section('content')
    <main class="w-full min-h-screen bg-yellow-800 pt-[100px] px-8 sm:px-16 lg:px-32 pb-16 flex items-center flex-col">
        <h1 class="mb-16 glow-text text-5xl md:text-6xl lg:text-7xl tracking-wider text-white bangers-regular">ABOUT US</h1>
        
        
    <div class="w-full max-w-[800px]">
        <div class="w-full grid grid-cols-1 sm:grid-cols-2 px-8 gap-4 flex justify-center items-center">
            <div class="h-[200px] overflow-hidden flex justify-center sm:justify-start">
                <img class="h-full object-contain" src="https://yt3.ggpht.com/-8bPaG2ngPLo/AAAAAAAAAAI/AAAAAAAAAAA/kHJf7yXma80/s900-c-k-no-mo-rj-c0xffffff/photo.jpg" alt="">
            </div>
            <div class="mt-8 sm:mt-0">
                <h2 class="text-center sm:text-start text-2xl md:text-3xl lg:text-4xl bangers-regular tracking-wider text-white drop-shadow-lg">Eugene Krabs</h2>
                <p class="text-center sm:text-start text-white mt-2 sm:mt-3 sm:mt-0">Mr. Krabs is the founder of Krusty Krab. Passionate about fast food, he opened Krusty Krab in 1999.</p>
            </div>
        </div>

        <div class="w-full mt-24 grid grid-cols-1 sm:grid-cols-2 px-8 gap-4 flex justify-center items-center">
            <div class="mt-8 sm:mt-0 sm:row-start-1 row-start-2">
                <h2 class="text-center sm:text-start text-2xl md:text-3xl lg:text-4xl bangers-regular tracking-wider text-white drop-shadow-lg">Squidward Tentacles</h2>
                <p class="text-center sm:text-start text-white mt-2 sm:mt-3 sm:mt-0">Mr. Tentacles is our experienced cashier. </p>
            </div>
            <div class="h-[200px] overflow-hidden flex justify-center sm:justify-start">
                <img class="h-full object-contain" src="http://img4.wikia.nocookie.net/__cb20110911114021/spongebob/images/e/e2/Squidward_Design_2.jpg" alt="">
            </div>
        </div>


        <div class="mt-24 w-full grid grid-cols-1 sm:grid-cols-2 px-8 gap-4 flex justify-center items-center">
            <div class="h-[200px] overflow-hidden flex justify-center sm:justify-start">
                <img class="h-full object-contain" src="https://tse1.mm.bing.net/th?id=OIP.jVfc62FgQkvl2NTax9qFVQHaJW&pid=Api&P=0&h=180" alt="">
            </div>
            <div class="mt-8 sm:mt-0">
                <h2 class="text-center sm:text-start text-2xl md:text-3xl lg:text-4xl bangers-regular tracking-wider text-white drop-shadow-lg">Spongebob Squarepants</h2>
                <p class="text-center sm:text-start text-white mt-2 sm:mt-3 sm:mt-0">Our professional cook, ready to serve our delicious menus!</p>
            </div>
        </div>
        
    </div>
    </main>
@endsection

@section('script')

@endsection