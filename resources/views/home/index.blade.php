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

            cardsRight.forEach(card => {
                observerRight.observe(card);
            });

            cardsLeft.forEach(card => {
                observerLeft.observe(card);
            });

            // Initialize Select2 for the city input
            $('#city-select').select2({
                placeholder: 'Pilih Kota Tujuan',
                allowClear: true
            });



        });

        document.getElementById('search-form').addEventListener('submit', function(event) {
        const checkinInput = document.getElementById('checkin');
        const checkoutInput = document.getElementById('checkout');

        const formatDate = (dateStr) => {
            const [year, month, day] = dateStr.split('-');
            return `${day}/${month}/${year}`;
        };

        checkinInput.value = formatDate(checkinInput.value);
        checkoutInput.value = formatDate(checkoutInput.value);
    });
    </script>



    <div
        class="h-[57em] bg-cover bg-[url('https://img.freepik.com/free-photo/modern-luxury-hotel-room-with-illuminated-electric-lamp-comfortable-bed-generated-by-artificial-intelligence_188544-150151.jpg?t=st=1716354432~exp=1716358032~hmac=86adb8da407693ff98ef44ec732644be54809eeecf1506340cbe55d5a4720577&w=1060')] overflow-clip">

        <div class="animate-fadeInUp-animation">
            <div>
                <h1 class="text-background text-center font-bold text-[4rem] pt-36">Temukan akomodasi terbaikmu</h1>
                <div class=" w-[70em] mx-auto h-px my-3 bg-background border-0"></div>
                <p class=" text-[1.3rem] text-white mx-auto text-center">Pilih opsi di bawah ini untuk menelusuri akomodasi</p>
            </div>
            <!-- Search bar -->
            <form action="/hotel" method="GET">
                <div
                    class=" mx-auto h-20 w-[70em] rounded-full shadow-2xl translate-y-12 bg-white border-gray-300 border-3 overflow-x-auto">
                    <div class="flex align-middle w-65 mx-auto h-100 ">
                        <div class="group flex flex-grow pl-7  transition ease-in-out hover:bg-slate-200 active:bg-slate-300 duration-300 cursor-pointer"
                            style="border-top-left-radius: 9999px; border-bottom-left-radius:9999px;">
                            <div class="fa-solid fa-location-dot fa-lg align-middle m-auto mx-0"></div>
                            <div class="lex-col ml-6 my-auto">
                                <div class="flex-grow text-[0.8rem]">Destinasi</div>
                                <div class="flex-grow font-bold">
                                    <select id="city-select" name="cari"
                                        class="cursor-pointer w-[10em] transition group-hover:bg-slate-200 duration-300" >
                                        <option value="">Pilih Kota Tujuan</option>
                                        <option value="Surabaya"
                                            {{ request()->input('cari') == 'Surabaya' ? 'selected' : '' }}>Surabaya</option>
                                        <option value="Jakarta"
                                            {{ request()->input('cari') == 'Jakarta' ? 'selected' : '' }}>Jakarta</option>
                                        <option value="Bandung"
                                            {{ request()->input('cari') == 'Bandung' ? 'selected' : '' }}>Bandung</option>
                                        <option value="Bali" {{ request()->input('cari') == 'Bali' ? 'selected' : '' }}>
                                            Bali</option>
                                        <option value="Yogyakarta"
                                            {{ request()->input('cari') == 'Yogyakarta' ? 'selected' : '' }}>Yogyakarta
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div
                            class="flex flex-grow  pl-5 transition ease-in-out hover:bg-slate-200 active:bg-slate-300 duration-300 cursor-pointer">
                            <div class="flex-col ml-6 my-auto">
                                <div class="flex-grow text-[0.8rem]">Check-in</div>
                                <div class="flex-grow font-bold"><input class="cursor-pointer" type="date" name="checkin"
                                        value="{{ request()->input('checkin', '2024-05-30') }}"></div>
                            </div>
                        </div>
                        <div
                            class="flex flex-grow  pl-5 transition ease-in-out hover:bg-slate-200 active:bg-slate-300 duration-300 cursor-pointer">
                            <div class="flex-col ml-6 my-auto">
                                <div class="flex-grow text-[0.8rem]">Check-out</div>
                                <div class="flex-grow font-bold"><input type="date" name="checkout"
                                        value="{{ request()->input('checkout', '2024-06-01') }}"></div>
                            </div>
                        </div>
                        <div
                            class="flex flex-grow  pl-5 transition ease-in-out hover:bg-slate-200 active:bg-slate-300 duration-300 cursor-pointer">
                            <div class="fa-solid fa-bed fa-lg align-middle m-auto mx-0"></div>
                            <div class="flex-col ml-6 my-auto">
                                <div class="flex-grow text-[0.8rem]">Jumlah Tamu</div>
                                <div class="flex-grow font-bold"><input class="w-6" type="number"
                                        value="{{ request()->input('tamu', 1) }}" name="tamu"> orang</div>
                            </div>
                        </div>
                        <div class="flex flex-grow "
                            style="border-top-right-radius: 9999px; border-bottom-right-radius:9999px;">

                            <button type="submit" value="CARI"
                                class="rounded-xl bg-sky-900 w-[9em] h-[3.5em] my-auto ml-7 mr-7 transition text-background hover:from-accent hover:scale-105 hover:shadow-2xl active:bg-secon z-100 font-bold">Yuk,
                                cari!</button>

                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>


    <div class="container">


        <div class="home-card-right my-24">
            <h1 class="font-bold ml-2">Libur Panjang di Hotel Domestik</h1>
            <div class="flex flex-wrap justify-center md:justify-between">
                <div class="card shadow-xl m-2 w-[26rem] md:w-[19rem] cursor-pointer">
                    <a href="/hotel/1" class="no-underline block">
                        <div class="h-[14em] bg-slate-300">
                            <img src="{{ '/storage/surabaya/verwood/1.jpg' }}" alt="" class="rounded w-full h-full object-cover">
                        </div>
                        <div class="card-body flex flex-col">
                            <h5 class="card-title font-bold text-black">Verwood Hotel and Serviced Residence</h5>
                            <div class="flex">
                                <div class="text-yellow-500">
                                    <div class="fa-solid fa-star"></div>
                                    <div class="fa-solid fa-star"></div>
                                    <div class="fa-solid fa-star"></div>
                                </div>
                                <div class="flex pl-2 text-sky-700 font-bold">
                                    <div class="fa-solid fa-location-dot pt-1"></div>
                                    <p class="pl-1">Pusat Surabaya, Surabaya</p>
                                </div>
                            </div>
                            <div class="flex">
                                <i class="fa-regular fa-thumbs-up pt-1 text-secon"></i>
                                <p class="pl-1 text-black">4.4/5 - Bagus (2313 ulasan)</p>
                            </div>
                            <div class="flex-grow"></div>
                            <p class="text-prim font-bold text-[1.3rem] pt-4">Rp567.000</p>
                        </div>


                    </a>
                </div>

                <div class="card shadow-xl m-2 w-[26rem] md:w-[19rem] cursor-pointer">
                    <a href="/hotel/2" class="no-underline block">
                    <div class="h-[14em] bg-slate-300">
                        <img src="{{ '/storage/surabaya/double_tree/1.jpg' }}" alt=""
                            class=" rounded w-full h-full object-cover">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title font-bold text-black">Double Tree by Hilton Surabaya</h5>
                        <div class="flex">
                            <div class="text-yellow-500">
                                <div class="fa-solid fa-star"></div>
                                <div class="fa-solid fa-star"></div>
                                <div class="fa-solid fa-star"></div>
                                <div class="fa-solid fa-star"></div>
                            </div>
                            <div class=" flex pl-2 text-sky-700 font-bold">
                                <div class="fa-solid fa-location-dot pt-1"></div>
                                <p class="pl-1">Pusat Surabaya, Surabaya</p>
                            </div>
                        </div>
                        <div class="flex">
                            <i class="fa-regular fa-thumbs-up pt-1 text-secon"></i>
                            <p class="pl-1 text-black">4.7/5 - Sangat Bagus (1965 ulasan)</p>
                        </div>
                        <p class="text-prim font-bold text-[1.3rem] pt-4">Rp1.550.000</p>
                    </div>
                </a>
                </div>

                <div class="card shadow-xl m-2 w-[26rem] md:w-[19rem] cursor-pointer">
                    <a href="/hotel/3" class="no-underline block">
                    <div class="h-[14em] bg-slate-300">
                        <img src="{{ '/storage/surabaya/novotel_samator/1.jpg' }}" alt=""
                            class=" rounded w-full h-full object-cover">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title font-bold text-black">Novotel Samator Surabaya Timur</h5>
                        <div class="flex">
                            <div class="text-yellow-500">
                                <div class="fa-solid fa-star"></div>
                                <div class="fa-solid fa-star"></div>
                                <div class="fa-solid fa-star"></div>
                                <div class="fa-solid fa-star"></div>
                            </div>
                            <div class=" flex pl-2 text-sky-700 font-bold">
                                <div class="fa-solid fa-location-dot pt-1"></div>
                                <p class="pl-1">Rungkut, Surabaya</p>
                            </div>
                        </div>
                        <div class="flex">
                            <i class="fa-regular fa-thumbs-up pt-1 text-secon"></i>
                            <p class="pl-1 text-black">4.5/5 - Bagus (2255 ulasan)</p>
                        </div>
                        <p class="text-prim font-bold text-[1.3rem] pt-4">Rp582.154</p>
                    </div>
                </a>
                </div>
                <div class="card shadow-xl m-2 w-[26rem] md:w-[19rem] cursor-pointer">
                    <a href="/hotel/5" class="no-underline block">
                    <div class="h-[14em] bg-slate-300">
                        <img src="{{ '/storage/surabaya/whiz_luxe/1.jpg' }}" alt=""
                            class=" rounded w-full h-full object-cover">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title font-bold text-black">Whiz Luxe Hotel Spazio Surabaya</h5>
                        <div class="flex">
                            <div class="text-yellow-500">
                                <div class="fa-solid fa-star"></div>
                                <div class="fa-solid fa-star"></div>
                                <div class="fa-solid fa-star"></div>
                                <div class="fa-solid fa-star"></div>
                                <div class="fa-solid fa-star"></div>
                            </div>
                            <div class=" flex pl-2 text-sky-700 font-bold">
                                <div class="fa-solid fa-location-dot pt-1"></div>
                                <p class="pl-1">Dukuh Pakis, Surabaya</p>
                            </div>
                        </div>
                        <div class="flex">
                            <i class="fa-regular fa-thumbs-up pt-1 text-secon"></i>
                            <p class="pl-1 text-black">4.5/5 - Bagus (3012 ulasan)</p>
                        </div>
                        <p class="text-prim font-bold text-[1.3rem] pt-4">Rp1.357.192</p>
                    </div>
                </a>
                </div>
            </div>





            <div class=" flex mx-auto pt-5 text-center justify-center">
            </div>
        </div>


        <div class="  home-card-left  my-24">
            <h1 class="font-bold ml-2">Akomodasi Yang Lagi Nge-Hits di Kotamu</h1>
            <div class="flex flex-wrap justify-center md:justify-between">
                <div class="card shadow-xl m-2 w-[26rem] md:w-[19rem] cursor-pointer">
                    <a href="/hotel/1" class="no-underline block">
                        <div class="h-[14em] bg-slate-300">
                            <img src="{{ '/storage/surabaya/swiss_belinn/1.jpg' }}" alt="" class="rounded w-full h-full object-cover">
                        </div>
                        <div class="card-body grid grid-rows-[auto,auto,auto,1fr,auto]">
                            <h5 class="card-title font-bold text-black">Swiss Belinn Tunjungan</h5>
                            <div class="flex">
                                <div class="text-yellow-500">
                                    <div class="fa-solid fa-star"></div>
                                    <div class="fa-solid fa-star"></div>
                                    <div class="fa-solid fa-star"></div>
                                </div>
                                <div class="flex pl-2 text-sky-700 font-bold">
                                    <div class="fa-solid fa-location-dot pt-1"></div>
                                    <p class="pl-1">Pusat Surabaya, Surabaya</p>
                                </div>
                            </div>
                            <div class="flex">
                                <i class="fa-regular fa-thumbs-up pt-1 text-secon"></i>
                                <p class="pl-1 text-black">4.4/5</p>
                            </div>
                            <div class="flex-grow"></div>
                            <p class="text-prim font-bold text-[1.3rem] pt-4">Rp567.000</p>
                        </div>
                    </a>
                </div>

                <div class="card shadow-xl m-2 w-[26rem] md:w-[19rem] cursor-pointer">
                    <a href="/hotel/2" class="no-underline block">
                    <div class="h-[14em] bg-slate-300">
                        <img src="{{ '/storage/surabaya/double_tree/1.jpg' }}" alt=""
                            class=" rounded w-full h-full object-cover">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title font-bold text-black">Double Tree by Hilton Surabaya</h5>
                        <div class="flex">
                            <div class="text-yellow-500">
                                <div class="fa-solid fa-star"></div>
                                <div class="fa-solid fa-star"></div>
                                <div class="fa-solid fa-star"></div>
                                <div class="fa-solid fa-star"></div>
                            </div>
                            <div class=" flex pl-2 text-sky-700 font-bold">
                                <div class="fa-solid fa-location-dot pt-1"></div>
                                <p class="pl-1">Pusat Surabaya, Surabaya</p>
                            </div>
                        </div>
                        <div class="flex">
                            <i class="fa-regular fa-thumbs-up pt-1 text-secon"></i>
                            <p class="pl-1 text-black">4.7/5</p>
                        </div>
                        <p class="text-prim font-bold text-[1.3rem] pt-4">Rp1.550.000</p>
                    </div>
                </a>
                </div>

                <div class="card shadow-xl m-2 w-[26rem] md:w-[19rem] cursor-pointer">
                    <a href="/hotel/3" class="no-underline block">
                    <div class="h-[14em] bg-slate-300">
                        <img src="{{ '/storage/surabaya/novotel_samator/1.jpg' }}" alt=""
                            class=" rounded w-full h-full object-cover">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title font-bold text-black">Novotel Samator Surabaya</h5>
                        <div class="flex">
                            <div class="text-yellow-500">
                                <div class="fa-solid fa-star"></div>
                                <div class="fa-solid fa-star"></div>
                                <div class="fa-solid fa-star"></div>
                                <div class="fa-solid fa-star"></div>
                            </div>
                            <div class=" flex pl-2 text-sky-700 font-bold">
                                <div class="fa-solid fa-location-dot pt-1"></div>
                                <p class="pl-1">Rungkut, Surabaya</p>
                            </div>
                        </div>
                        <div class="flex">
                            <i class="fa-regular fa-thumbs-up pt-1 text-secon"></i>
                            <p class="pl-1 text-black">4.5/5</p>
                        </div>
                        <p class="text-prim font-bold text-[1.3rem] pt-4">Rp582.154</p>
                    </div>
                </a>
                </div>
                <div class="card shadow-xl m-2 w-[26rem] md:w-[19rem] cursor-pointer">
                    <a href="/hotel/5" class="no-underline block">
                    <div class="h-[14em] bg-slate-300">
                        <img src="{{ '/storage/surabaya/vasa/1.jpg' }}" alt=""
                            class=" rounded w-full h-full object-cover">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title font-bold text-black">Vasa Hotel Surabaya</h5>
                        <div class="flex">
                            <div class="text-yellow-500">
                                <div class="fa-solid fa-star"></div>
                                <div class="fa-solid fa-star"></div>
                                <div class="fa-solid fa-star"></div>
                                <div class="fa-solid fa-star"></div>
                                <div class="fa-solid fa-star"></div>
                            </div>
                            <div class=" flex pl-2 text-sky-700 font-bold">
                                <div class="fa-solid fa-location-dot pt-1"></div>
                                <p class="pl-1">Dukuh Pakis, Surabaya</p>
                            </div>
                        </div>
                        <div class="flex">
                            <i class="fa-regular fa-thumbs-up pt-1 text-secon"></i>
                            <p class="pl-1 text-black">4.5/5</p>
                        </div>
                        <p class="text-prim font-bold text-[1.3rem] pt-4">Rp1.357.192</p>
                    </div>
                </a>
                </div>
            </div>





            <div class=" flex mx-auto pt-5 text-center justify-center">
            </div>
        </div>

        <div class=" home-card-right my-24 ml-2">
            <h1 class="font-bold ml-2">Staycation Irit Anti Ribet</h1>
            <div class="flex flex-wrap justify-center md:justify-between">
                <div class="card shadow-xl m-2 w-[26rem] md:w-[19rem] cursor-pointer">
                    <a href="/hotel/1" class="no-underline block">
                        <div class="h-[14em] bg-slate-300">
                            <img src="{{ '/storage/surabaya/swiss_belinn/1.jpg' }}" alt="" class="rounded w-full h-full object-cover">
                        </div>
                        <div class="card-body grid grid-rows-[auto,auto,auto,1fr,auto]">
                            <h5 class="card-title font-bold text-black">Swiss Belinn Tunjungan</h5>
                            <div class="flex">
                                <div class="text-yellow-500">
                                    <div class="fa-solid fa-star"></div>
                                    <div class="fa-solid fa-star"></div>
                                    <div class="fa-solid fa-star"></div>
                                </div>
                                <div class="flex pl-2 text-sky-700 font-bold">
                                    <div class="fa-solid fa-location-dot pt-1"></div>
                                    <p class="pl-1">Pusat Surabaya, Surabaya</p>
                                </div>
                            </div>
                            <div class="flex">
                                <i class="fa-regular fa-thumbs-up pt-1 text-secon"></i>
                                <p class="pl-1 text-black">4.4/5</p>
                            </div>
                            <div class="flex-grow"></div>
                            <p class="text-prim font-bold text-[1.3rem] pt-4">Rp567.000</p>
                        </div>
                    </a>
                </div>

                <div class="card shadow-xl m-2 w-[26rem] md:w-[19rem] cursor-pointer">
                    <a href="/hotel/2" class="no-underline block">
                    <div class="h-[14em] bg-slate-300">
                        <img src="{{ '/storage/surabaya/double_tree/1.jpg' }}" alt=""
                            class=" rounded w-full h-full object-cover">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title font-bold text-black">Double Tree by Hilton Surabaya</h5>
                        <div class="flex">
                            <div class="text-yellow-500">
                                <div class="fa-solid fa-star"></div>
                                <div class="fa-solid fa-star"></div>
                                <div class="fa-solid fa-star"></div>
                                <div class="fa-solid fa-star"></div>
                            </div>
                            <div class=" flex pl-2 text-sky-700 font-bold">
                                <div class="fa-solid fa-location-dot pt-1"></div>
                                <p class="pl-1">Pusat Surabaya, Surabaya</p>
                            </div>
                        </div>
                        <div class="flex">
                            <i class="fa-regular fa-thumbs-up pt-1 text-secon"></i>
                            <p class="pl-1 text-black">4.7/5</p>
                        </div>
                        <p class="text-prim font-bold text-[1.3rem] pt-4">Rp1.550.000</p>
                    </div>
                </a>
                </div>

                <div class="card shadow-xl m-2 w-[26rem] md:w-[19rem] cursor-pointer">
                    <a href="/hotel/3" class="no-underline block">
                    <div class="h-[14em] bg-slate-300">
                        <img src="{{ '/storage/surabaya/novotel_samator/1.jpg' }}" alt=""
                            class=" rounded w-full h-full object-cover">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title font-bold text-black">Novotel Samator Surabaya</h5>
                        <div class="flex">
                            <div class="text-yellow-500">
                                <div class="fa-solid fa-star"></div>
                                <div class="fa-solid fa-star"></div>
                                <div class="fa-solid fa-star"></div>
                                <div class="fa-solid fa-star"></div>
                            </div>
                            <div class=" flex pl-2 text-sky-700 font-bold">
                                <div class="fa-solid fa-location-dot pt-1"></div>
                                <p class="pl-1">Rungkut, Surabaya</p>
                            </div>
                        </div>
                        <div class="flex">
                            <i class="fa-regular fa-thumbs-up pt-1 text-secon"></i>
                            <p class="pl-1 text-black">4.5/5</p>
                        </div>
                        <p class="text-prim font-bold text-[1.3rem] pt-4">Rp582.154</p>
                    </div>
                </a>
                </div>
                <div class="card shadow-xl m-2 w-[26rem] md:w-[19rem] cursor-pointer">
                    <a href="/hotel/5" class="no-underline block">
                    <div class="h-[14em] bg-slate-300">
                        <img src="{{ '/storage/surabaya/vasa/1.jpg' }}" alt=""
                            class=" rounded w-full h-full object-cover">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title font-bold text-black">Vasa Hotel Surabaya</h5>
                        <div class="flex">
                            <div class="text-yellow-500">
                                <div class="fa-solid fa-star"></div>
                                <div class="fa-solid fa-star"></div>
                                <div class="fa-solid fa-star"></div>
                                <div class="fa-solid fa-star"></div>
                                <div class="fa-solid fa-star"></div>
                            </div>
                            <div class=" flex pl-2 text-sky-700 font-bold">
                                <div class="fa-solid fa-location-dot pt-1"></div>
                                <p class="pl-1">Dukuh Pakis, Surabaya</p>
                            </div>
                        </div>
                        <div class="flex">
                            <i class="fa-regular fa-thumbs-up pt-1 text-secon"></i>
                            <p class="pl-1 text-black">4.5/5</p>
                        </div>
                        <p class="text-prim font-bold text-[1.3rem] pt-4">Rp1.357.192</p>
                    </div>
                </a>
                </div>
            </div>





            <div class=" flex mx-auto pt-5 text-center justify-center">
            </div>

    </div>
@endsection
