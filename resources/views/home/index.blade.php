@extends('layouts.app')

@section('content')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const observerRight = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fadeInRight-animation');
                    observerRight.unobserve(entry.target); // Corrected here
                }
            });
        });

        const observerLeft = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fadeInLeft-animation');
                    observerLeft.unobserve(entry.target); // Corrected here
                }
            });
        });

        const cardsRight = document.querySelectorAll('.home-card-right');
        const cardsLeft = document.querySelectorAll('.home-card-left');

        cardsRight.forEach(card => { // Corrected variable name here
            observerRight.observe(card);
        });

        cardsLeft.forEach(card => {
            observerLeft.observe(card);
        });
    });
</script>



<div
    class="h-[57em] bg-cover bg-[url('https://img.freepik.com/free-photo/modern-luxury-hotel-room-with-illuminated-electric-lamp-comfortable-bed-generated-by-artificial-intelligence_188544-150151.jpg?t=st=1716354432~exp=1716358032~hmac=86adb8da407693ff98ef44ec732644be54809eeecf1506340cbe55d5a4720577&w=1060')] overflow-clip">

    <div class="animate-fadeInUp-animation">
    <div>
        <h1 class="text-background text-center font-bold text-[4rem] pt-36">Temukan akomodasi terbaikmu</h1>
        <div class=" w-[70em] mx-auto h-px my-3 bg-background border-0"></div>
    </div>
    <!-- Search bar -->
    <form action="/hotel" method="GET">
        <div
            class=" mx-auto h-20 w-[70em] rounded-full shadow-2xl translate-y-12 bg-white border-gray-300 border-3 overflow-x-auto">
            <div class="flex align-middle w-65 mx-auto h-100 ">
                <div class="group flex flex-grow pl-7  transition ease-in-out hover:bg-slate-200 active:bg-slate-300 duration-300 cursor-pointer"
                    style="border-top-left-radius: 9999px; border-bottom-left-radius:9999px;">
                    <div class="fa-solid fa-search fa-lg align-middle m-auto mx-0"></div>
                    <div class="lex-col ml-6 my-auto">
                        <div class="flex-grow text-[0.8rem]">Destinasi</div>
                        <div class="flex-grow font-bold"><input placeholder="Cari Kota Tujuan" class="cursor-pointer w-[8em] transition group-hover:bg-slate-200 duration-300" type="text" name="cari" value=" {{ old('cari')}}"></div>
                    </div>
                </div>
                <div
                    class="flex flex-grow  pl-5 transition ease-in-out hover:bg-slate-200 active:bg-slate-300 duration-300 cursor-pointer">
                    <div class="fa-regular fa-calendar fa-lg align-middle m-auto mx-0"></div>
                    <div class="flex-col ml-6 my-auto">
                        <div class="flex-grow text-[0.8rem]">Check-in</div>
                        <div class="flex-grow font-bold"><input type="date"></div>
                    </div>
                </div>
                <div
                    class="flex flex-grow  pl-5 transition ease-in-out hover:bg-slate-200 active:bg-slate-300 duration-300 cursor-pointer">
                    <div class="flex-col ml-6 my-auto">
                        <div class="flex-grow text-[0.8rem]">Check-out</div>
                        <div class="flex-grow font-bold"><input type="date"></div>
                    </div>
                </div>
                <div
                    class="flex flex-grow  pl-5 transition ease-in-out hover:bg-slate-200 active:bg-slate-300 duration-300 cursor-pointer">
                    <div class="fa-solid fa-bed fa-lg align-middle m-auto mx-0"></div>
                    <div class="flex-col ml-6 my-auto">
                        <div class="flex-grow text-[0.8rem]">Guests</div>
                        <div class="flex-grow font-bold">2 guests, 1 room</div>
                    </div>
                </div>
                <div class="flex flex-grow "
                    style="border-top-right-radius: 9999px; border-bottom-right-radius:9999px;">

                    <button type="submit" value="CARI"
                        class="rounded-xl bg-accent w-[9em] h-[3.5em] my-auto ml-7 mr-7 transition text-background hover:from-accent hover:scale-105 hover:shadow-2xl active:bg-secon z-100 font-bold">Yuk,
                        cari!</button>

                </div>
            </div>
        </div>
    </form>
</div>

</div>


<div class="container">


    <div class="home-card-right my-24 container border-red-500 border-1">
        <h1 class="font-bold border-red-500 border-1">Promo terbaik</h1>
        <div class="h-[14rem] bg-slate-300 border-red-500 border-1">
            <img class="overflow-scroll rounded-xl" src="" alt="Hero image">
        </div>
    </div>


    <div class="  home-card-left  my-24">
        <h1 class="font-bold ml-2">Staycation populer</h1>
        <div class="flex flex-wrap justify-center md:justify-between">
            <div class="card shadow-xl m-2 w-[26rem] md:w-[19rem] cursor-pointer">
                <div class="h-[14em] bg-slate-300">
                    <img src="" class="card-img-top" alt="Hotel image">
                </div>
                <div class="card-body">
                    <h5 class="card-title font-bold">Hotel Petra Surabaya</h5>
                    <div class="flex">
                        <div class="text-yellow-500">
                            <div class="fa-solid fa-star"></div>
                            <div class="fa-solid fa-star"></div>
                            <div class="fa-solid fa-star"></div>
                            <div class="fa-solid fa-star"></div>
                        </div>
                        <div class=" flex pl-2 text-accent">
                            <div class="fa-solid fa-location-dot pt-1"></div>
                            <p class="pl-1">Jl. Siwalankerto, Surabaya</p>
                        </div>
                    </div>
                    <div class="flex">
                        <i class="fa-regular fa-thumbs-up pt-1 text-secon"></i>
                        <p class="pl-1">4.3/5 (39 ulasan)</p>
                    </div>
                    <p class="text-prim font-bold text-[1.3rem] pt-4">Rp1.250.000</p>
                </div>
            </div>
        </div>
        <div class=" flex mx-auto pt-5 text-center justify-center">
            <p class="text-accent font-bold text-base cursor-pointer">Lihat Semua</p>
            <div class="fa-solid fa-greater-than ml-2 mt-[0.38em]"></div>
        </div>
    </div>

    <div class=" home-card-right my-24 ml-2">
        <h1 class="font-bold">Staycation irit</h1>
        <div class="flex flex-wrap justify-center md:justify-between">
            <div class="card shadow-xl m-2 w-[26rem] md:w-[19rem] cursor-pointer">
                <div class="h-[14em] bg-slate-300">
                    <img src="" class="card-img-top" alt="Hotel image">
                </div>
                <div class="card-body">
                    <h5 class="card-title font-bold">Hotel Petra Surabaya</h5>
                    <div class="flex">
                        <div class="text-yellow-500">
                            <div class="fa-solid fa-star"></div>
                            <div class="fa-solid fa-star"></div>
                            <div class="fa-solid fa-star"></div>
                            <div class="fa-solid fa-star"></div>
                        </div>
                        <div class=" flex pl-2 text-accent">
                            <div class="fa-solid fa-location-dot pt-1"></div>
                            <p class="pl-1">Jl. Siwalankerto, Surabaya</p>
                        </div>
                    </div>
                    <div class="flex">
                        <i class="fa-regular fa-thumbs-up pt-1"></i>
                        <p class="pl-1">4.3/5 (39 ulasan)</p>
                    </div>
                    <p class="text-prim font-bold text-[1.3rem] pt-4">Rp1.250.000</p>
                </div>
            </div>
        </div>
        <div class=" flex mx-auto pt-5 text-center justify-center">
            <p class="text-accent font-bold text-base cursor-pointer">Lihat Semua</p>
            <div class="fa-solid fa-greater-than ml-2 mt-[0.38em]"></div>
        </div>
    </div>

</div>

@endsection
