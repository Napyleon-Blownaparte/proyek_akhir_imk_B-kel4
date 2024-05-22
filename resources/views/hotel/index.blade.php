@extends('layouts.app')

@section('content')
<div class=" h-20 bg-sky-700">
    <div
        class="mx-auto h-14 w-[80em] rounded shadow-2xl text-t bg-slate-300 border-gray-300 border-3 overflow-x-auto translate-y-[0.7em]">
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
                    class="rounded-xl bg-accent w-[9em] h-[3em] my-auto ml-7 mr-0 transition text-background hover:from-accent hover:scale-105 hover:shadow-2xl active:bg-secon z-100 font-bold text-sm">Yuk,
                    cari!</button>
            </div>
        </div>
    </div>
</div>

<div class=" flex my-3">
    <div class="container row mx-auto">
        {{-- FILTER PANEL --}}
        <div class="col-3">
            <div class="my-5">
                <p class="font-bold m-0">Rentang Harga</p>
                <p class=" text-slate-500 text-[0.8rem]">Per kamar, per malam</p>
                <div class="flex justify-between w-[19em]">
                    <input type="number" class="form-control border-black border-1 max-w-32">
                    <div class=" border-t-black border-1 w-2 translate-y-[1.3em]"></div>
                    <input type="number" class="form-control border-black border-1 max-w-32">
                </div>
            </div>
            <div class="my-5">
                <p class="font-bold m-0">Peringkat Bintang</p>
                <div class="flex my-3">
                    <input type="checkbox" class="mr-3">
                    <i class="fa-solid fa-star mx-[0.1rem]"></i>
                </div>
                <div class="flex my-3">
                    <input type="checkbox" class="mr-3">
                    <i class="fa-solid fa-star mx-[0.1rem]"></i>
                    <i class="fa-solid fa-star mx-[0.1rem]"></i>
                </div>
                <div class="flex my-3">
                    <input type="checkbox" class="mr-3">
                    <i class="fa-solid fa-star mx-[0.1rem]"></i>
                    <i class="fa-solid fa-star mx-[0.1rem]"></i>
                    <i class="fa-solid fa-star mx-[0.1rem]"></i>
                </div>
                <div class="flex my-3">
                    <input type="checkbox" class="mr-3">
                    <i class="fa-solid fa-star mx-[0.1rem]"></i>
                    <i class="fa-solid fa-star mx-[0.1rem]"></i>
                    <i class="fa-solid fa-star mx-[0.1rem]"></i>
                    <i class="fa-solid fa-star mx-[0.1rem]"></i>
                </div>
                <div class="flex my-3">
                    <input type="checkbox" class="mr-3">
                    <i class="fa-solid fa-star mx-[0.1rem]"></i>
                    <i class="fa-solid fa-star mx-[0.1rem]"></i>
                    <i class="fa-solid fa-star mx-[0.1rem]"></i>
                    <i class="fa-solid fa-star mx-[0.1rem]"></i>
                    <i class="fa-solid fa-star mx-[0.1rem]"></i>
                </div>
            </div>
            <div class=" my-5">
                <p class="font-bold m-0">Tipe Akomodasi</p>
                <div class="flex justify-between">
                    <input type="number" class="form-control">
                    <input type="number" class="form-control">
                </div>
            </div>
        </div>

        {{-- HOTEL PANEL --}}
        <div class=" col-9">
            {{-- Filter Card --}}
            <div>
                <p>Urut berdasarkan</p>
                <button class=""></button>
            </div>



            {{-- Hotel Card --}}
            <div class=" rounded-md flex h-52 border-slate-300 border-1 mb-3">
                <div>
                    <div class=" rounded-l-md bg-slate-400 w-64 h-52"></div>
                </div>
                <div class="flex-grow mx-4 my-4">
                    <h2 class="font-bold">Hotel Petra Surabaya</h2>
                    <div>
                        <i class="fa-solid fa-hotel"></i><span>Hotels</span>
                    </div>
                    <div class="my-1">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-location"></i><span>Jl. Siwalankerto, Surabaya</span>

                    </div>
                    <div>
                        <i class="fa-regular fa-thumbs-up pt-1 text-secon"></i>
                        <span class="pl-1">4.3/5 - Excellent (39 ulasan)</span>
                    </div>

                </div>
                <div class="text-right flex flex-col justify-end m-4">
                    <div class="mb-4">
                        <p class="text-prim font-extrabold text-[1.5rem] my-0">Rp1.2500.000</p>
                        <p class="w-52 my-0 text-[0.7rem] text-slate-500">/kamar/malam</p>
                    </div>
                    <button class="rounded h-10 w-32 self-end text-white bg-gradient-to-r from-cyan-600 to-blue-500 font-bold transition duration-100 hover:scale-105 hover:shadow-2xl">Pilih Kamar</button>
                </div>
            </div>


            <div class=" rounded-md flex h-52 border-slate-300 border-1 mb-3">
                <div>
                    <div class=" rounded-l-md bg-slate-400 w-64 h-52"></div>
                </div>
                <div class="flex-grow mx-4 my-4">
                    <h2 class="font-bold">Hotel Petra Surabaya</h2>
                    <div>
                        <i class="fa-solid fa-hotel"></i><span>Hotels</span>
                    </div>
                    <div class="my-1">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-location"></i><span>Jl. Siwalankerto, Surabaya</span>

                    </div>
                    <div>
                        <i class="fa-regular fa-thumbs-up pt-1 text-secon"></i>
                        <span class="pl-1">4.3/5 - Excellent (39 ulasan)</span>
                    </div>

                </div>
                <div class="text-right flex flex-col justify-end m-4">
                    <div class="mb-4">
                        <p class="text-prim font-extrabold text-[1.5rem] my-0">Rp1.2500.000</p>
                        <p class="w-52 my-0 text-[0.7rem] text-slate-500">/kamar/malam</p>
                    </div>
                    <button class="rounded h-10 w-32 self-end text-white bg-gradient-to-r from-cyan-600 to-blue-500 font-bold transition duration-100 hover:scale-105 hover:shadow-2xl">Pilih Kamar</button>
                </div>
            </div>


            <div class=" rounded-md flex h-52 border-slate-300 border-1 mb-3">
                <div>
                    <div class=" rounded-l-md bg-slate-400 w-64 h-52"></div>
                </div>
                <div class="flex-grow mx-4 my-4">
                    <h2 class="font-bold">Hotel Petra Surabaya</h2>
                    <div>
                        <i class="fa-solid fa-hotel"></i><span>Hotels</span>
                    </div>
                    <div class="my-1">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-location"></i><span>Jl. Siwalankerto, Surabaya</span>

                    </div>
                    <div>
                        <i class="fa-regular fa-thumbs-up pt-1 text-secon"></i>
                        <span class="pl-1">4.3/5 - Excellent (39 ulasan)</span>
                    </div>

                </div>
                <div class="text-right flex flex-col justify-end m-4">
                    <div class="mb-4">
                        <p class="text-prim font-extrabold text-[1.5rem] my-0">Rp1.2500.000</p>
                        <p class="w-52 my-0 text-[0.7rem] text-slate-500">/kamar/malam</p>
                    </div>
                    <button class="rounded h-10 w-32 self-end text-white bg-gradient-to-r from-cyan-600 to-blue-500 font-bold transition duration-100 hover:scale-105 hover:shadow-2xl">Pilih Kamar</button>
                </div>
            </div>


            <div class=" rounded-md flex h-52 border-slate-300 border-1 mb-3">
                <div>
                    <div class=" rounded-l-md bg-slate-400 w-64 h-52"></div>
                </div>
                <div class="flex-grow mx-4 my-4">
                    <h2 class="font-bold">Hotel Petra Surabaya</h2>
                    <div>
                        <i class="fa-solid fa-hotel"></i><span>Hotels</span>
                    </div>
                    <div class="my-1">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-location"></i><span>Jl. Siwalankerto, Surabaya</span>

                    </div>
                    <div>
                        <i class="fa-regular fa-thumbs-up pt-1 text-secon"></i>
                        <span class="pl-1">4.3/5 - Excellent (39 ulasan)</span>
                    </div>

                </div>
                <div class="text-right flex flex-col justify-end m-4">
                    <div class="mb-4">
                        <p class="text-prim font-extrabold text-[1.5rem] my-0">Rp1.2500.000</p>
                        <p class="w-52 my-0 text-[0.7rem] text-slate-500">/kamar/malam</p>
                    </div>
                    <button class="rounded h-10 w-32 self-end text-white bg-gradient-to-r from-cyan-600 to-blue-500 font-bold transition duration-100 hover:scale-105 hover:shadow-2xl">Pilih Kamar</button>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
