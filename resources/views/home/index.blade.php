@extends('layouts.app')

@section('content')
<div
    class=" h-[50em] bg-cover bg-[url('https://images.unsplash.com/photo-1618773928121-c32242e63f39?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')] overflow-clip">

    <div>
        <h1 class="text-background text-center font-bold text-[4rem] pt-36">Temukan akomodasi terbaikmu</h1>
        <div class=" w-[70em] mx-auto h-px my-3 bg-background border-0"></div>
        <p class=" text-background w-[50em] text-center text-[1rem] mx-auto">Lorem ipsum dolor sit amet consectetur
            adipisicing elit. Tenetur molestiae dignissimos assumenda adipisci, ullam iure reprehenderit expedita
            voluptatibus</p>
    </div>
    <!-- Search bar -->
    <div
        class="mx-auto h-20 w-[70em] rounded-full shadow-2xl translate-y-12 bg-white border-gray-300 border-3 overflow-x-auto">
        <div class="flex align-middle w-65 mx-auto h-100 ">
            <div class="flex flex-grow pl-7  transition ease-in-out hover:bg-slate-200 active:bg-slate-300 duration-300 cursor-pointer"
                style="border-top-left-radius: 9999px; border-bottom-left-radius:9999px;">
                <div class="fa-solid fa-search fa-lg align-middle m-auto mx-0"></div>
                <div class="flex-col ml-6 my-auto">
                    <div class="flex-grow text-[0.8rem]">Destination</div>
                    <div class="flex-grow font-bold">Search</div>
                </div>
            </div>
            <div
                class="flex flex-grow  pl-5 transition ease-in-out hover:bg-slate-200 active:bg-slate-300 duration-300 cursor-pointer">
                <div class="fa-regular fa-calendar fa-lg align-middle m-auto mx-0"></div>
                <div class="flex-col ml-6 my-auto">
                    <div class="flex-grow text-[0.8rem]">Check-in</div>
                    <div class="flex-grow font-bold">--/--/--</div>
                </div>
            </div>
            <div
                class="flex flex-grow  pl-5 transition ease-in-out hover:bg-slate-200 active:bg-slate-300 duration-300 cursor-pointer">
                <div class="flex-col ml-6 my-auto">
                    <div class="flex-grow text-[0.8rem]">Check-out</div>
                    <div class="flex-grow font-bold">--/--/--</div>
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
            <div class="flex flex-grow  pl-5 "
                style="border-top-right-radius: 9999px; border-bottom-right-radius:9999px;">
                <button
                    class="rounded-xl bg-accent w-[9em] h-[3.5em] my-auto ml-7 mr-0 transition text-background hover:from-accent hover:scale-105 hover:shadow-2xl active:bg-secon z-100 font-bold">Yuk,
                    cari!</button>
            </div>
        </div>
    </div>

</div>


@php
$faker = Faker\Factory::create();
$hero = collect(range(1, 1))->map(function () use ($faker) {
return [
'image' => $faker->imageUrl(2480, 480, 'hero', true),
];
});
$hotels = collect(range(1, 4))->map(function () use ($faker) {
return [
'image' => $faker->imageUrl(1080, 720, 'hotel', true),
];
});
@endphp

<div class="container">


    <div class="my-24 container">
        <h1 class="font-bold">Promo terbaik</h1>
        <div>
            @foreach ($hero as $h)
            <img class="overflow-scroll rounded-xl" src="{{ $h['image'] }}" alt="Hero image">
            @endforeach
        </div>
    </div>


    <div class=" my-24">
        <h1 class="font-bold">Staycation populer</h1>
        <div class="flex flex-wrap justify-center md:justify-between">
            @foreach ($hotels as $hotel)
            <div class="card shadow-xl m-2 w-[26rem] md:w-[19rem] cursor-pointer">
                <div class="h-[14em] bg-slate-300">
                    <img src="{{ $hotel['image'] }}" class="card-img-top" alt="Hotel image">
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
            @endforeach
        </div>
        <div class=" flex mx-auto pt-5 text-center justify-center">
            <p class="text-accent font-bold text-base cursor-pointer">Lihat Semua</p>
            <div class="fa-solid fa-greater-than ml-2 mt-[0.38em]"></div>
        </div>
    </div>

    <div class=" my-24">
        <h1 class="font-bold">Staycation irit</h1>
        <div class="flex flex-wrap justify-center md:justify-between">
            @foreach ($hotels as $hotel)
            <div class="card shadow-xl m-2 w-[26rem] md:w-[19rem] cursor-pointer">
                <div class="h-[14em] bg-slate-300">
                    <img src="{{ $hotel['image'] }}" class="card-img-top" alt="Hotel image">
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
            @endforeach
        </div>
        <div class=" flex mx-auto pt-5 text-center justify-center">
            <p class="text-accent font-bold text-base cursor-pointer">Lihat Semua</p>
            <div class="fa-solid fa-greater-than ml-2 mt-[0.38em]"></div>
        </div>
    </div>







</div>




<footer class="bg-text dark:bg-gray-900 mt-52">
    <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
        <div class="md:flex md:justify-between">
            <div class="mb-6 md:mb-0">
                <a href="https://flowbite.com/" class="flex items-center">
                    <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 me-3" alt="FlowBite Logo" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
                </a>
            </div>
            <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Resources</h2>
                    <ul class="text-gray-500 dark:text-gray-400 font-medium">
                        <li class="mb-4">
                            <a href="https://flowbite.com/" class="hover:underline">Flowbite</a>
                        </li>
                        <li>
                            <a href="https://tailwindcss.com/" class="hover:underline">Tailwind CSS</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Follow us</h2>
                    <ul class="text-gray-500 dark:text-gray-400 font-medium">
                        <li class="mb-4">
                            <a href="https://github.com/themesberg/flowbite" class="hover:underline ">Github</a>
                        </li>
                        <li>
                            <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Discord</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
                    <ul class="text-gray-500 dark:text-gray-400 font-medium">
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <div class="sm:flex sm:items-center sm:justify-between">
            <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="https://flowbite.com/"
                    class="hover:underline">Flowbite™</a>. All Rights Reserved.
            </span>
            <div class="flex mt-4 sm:justify-center sm:mt-0">
                <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 8 19">
                        <path fill-rule="evenodd"
                            d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z"
                            clip-rule="evenodd" />
                    </svg>
                    <span class="sr-only">Facebook page</span>
                </a>
                <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 21 16">
                        <path
                            d="M16.942 1.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.585 11.585 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3A17.392 17.392 0 0 0 .182 13.218a15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.63 10.63 0 0 1-1.706-.83c.143-.106.283-.217.418-.33a11.664 11.664 0 0 0 10.118 0c.137.113.277.224.418.33-.544.328-1.116.606-1.71.832a12.52 12.52 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM6.678 10.813a1.941 1.941 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z" />
                    </svg>
                    <span class="sr-only">Discord community</span>
                </a>
                <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 20 17">
                        <path fill-rule="evenodd"
                            d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z"
                            clip-rule="evenodd" />
                    </svg>
                    <span class="sr-only">Twitter page</span>
                </a>
                <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z"
                            clip-rule="evenodd" />
                    </svg>
                    <span class="sr-only">GitHub account</span>
                </a>
                <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M10 0a10 10 0 1 0 10 10A10.009 10.009 0 0 0 10 0Zm6.613 4.614a8.523 8.523 0 0 1 1.93 5.32 20.094 20.094 0 0 0-5.949-.274c-.059-.149-.122-.292-.184-.441a23.879 23.879 0 0 0-.566-1.239 11.41 11.41 0 0 0 4.769-3.366ZM8 1.707a8.821 8.821 0 0 1 2-.238 8.5 8.5 0 0 1 5.664 2.152 9.608 9.608 0 0 1-4.476 3.087A45.758 45.758 0 0 0 8 1.707ZM1.642 8.262a8.57 8.57 0 0 1 4.73-5.981A53.998 53.998 0 0 1 9.54 7.222a32.078 32.078 0 0 1-7.9 1.04h.002Zm2.01 7.46a8.51 8.51 0 0 1-2.2-5.707v-.262a31.64 31.64 0 0 0 8.777-1.219c.243.477.477.964.692 1.449-.114.032-.227.067-.336.1a13.569 13.569 0 0 0-6.942 5.636l.009.003ZM10 18.556a8.508 8.508 0 0 1-5.243-1.8 11.717 11.717 0 0 1 6.7-5.332.509.509 0 0 1 .055-.02 35.65 35.65 0 0 1 1.819 6.476 8.476 8.476 0 0 1-3.331.676Zm4.772-1.462A37.232 37.232 0 0 0 13.113 11a12.513 12.513 0 0 1 5.321.364 8.56 8.56 0 0 1-3.66 5.73h-.002Z"
                            clip-rule="evenodd" />
                    </svg>
                    <span class="sr-only">Dribbble account</span>
                </a>
            </div>
        </div>
    </div>
</footer>
@endsection

{{-- <form action="{{ route('hotel.index') }}" method="GET">
@csrf
<label for="city">City:</label>
<input type="text" id="city" name="city" required>

<label for="guests">Guests:</label>
<input type="number" id="guests" name="guests" required>

<label for="checkin">Check-in:</label>
<input type="date" id="checkin" name="checkin" required>

<label for="checkout">Check-out:</label>
<input type="date" id="checkout" name="checkout" required>

<button type="submit">Search</button>
</form> --}}
