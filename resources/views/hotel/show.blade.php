@extends('layouts.app')

@section('content')
<form action="/hotel" method="GET">
<div class="sticky top-0 h-20 bg-sky-700 w-full z-40">
    <div
        class="mx-auto h-14 w-[80em] rounded shadow-2xl text-t bg-white border-gray-300 border-3 overflow-x-auto translate-y-[0.7em]">
        <div class="flex align-middle w-65 mx-auto h-100">
            <div class="group flex flex-grow pl-7 transition ease-in-out hover:bg-slate-200 active:bg-slate-300 duration-300 cursor-pointer"
                style="border-top-left-radius: 9999px; border-bottom-left-radius:9999px;">
                <div class="fa-solid fa-search fa-lg align-middle m-auto mx-0"></div>
                <div class="flex-col ml-6 my-auto">
                    <div class="flex-grow text-[0.8rem]">Destinasi</div>
                    <div class="flex-grow font-bold">
                        <input class="cursor-pointer w-[11em] transition group-hover:bg-slate-200 duration-300"
                            type="text" name="cari" value="{{ request()->input('cari') }}"
                            placeholder="Masukkan Kota Tujuan">
                    </div>
                </div>
            </div>
            <div
                class="flex flex-grow pl-5 transition ease-in-out hover:bg-slate-200 active:bg-slate-300 duration-300 cursor-pointer">
                <div class="fa-regular fa-calendar fa-lg align-middle m-auto mx-0"></div>
                <div class="flex-col ml-6 my-auto">
                    <div class="flex-grow text-[0.8rem]">Check-In</div>
                    <div class="flex-grow font-bold">--/--/--</div>
                </div>
            </div>
            <div
                class="flex flex-grow pl-5 transition ease-in-out hover:bg-slate-200 active:bg-slate-300 duration-300 cursor-pointer">
                <div class="flex-col ml-6 my-auto">
                    <div class="flex-grow text-[0.8rem]">Check-Out</div>
                    <div class="flex-grow font-bold">--/--/--</div>
                </div>
            </div>
            <div
                class="flex flex-grow pl-5 transition ease-in-out hover:bg-slate-200 active:bg-slate-300 duration-300 cursor-pointer">
                <div class="fa-solid fa-bed fa-lg align-middle m-auto mx-0"></div>
                <div class="flex-col ml-6 my-auto">
                    <div class="flex-grow text-[0.8rem]">Tamu</div>
                    <div class="flex-grow font-bold">2 guests, 1 room</div>
                </div>
            </div>
            <div class="flex flex-grow pl-5"
                style="border-top-right-radius: 9999px; border-bottom-right-radius:9999px;">
                <button type="submit" value="CARI"
                    class="rounded-xl bg-accent w-[9em] h-[3em] my-auto ml-7 mr-0 transition text-background hover:from-accent hover:scale-105 hover:shadow-2xl active:bg-secon z-100 font-bold text-sm">Yuk,
                    cari!</button>
            </div>
        </div>
    </div>
</div>
</form>

{{-- CONTENT --}}
<div class="w-[80em] mx-auto" id="info-umum">
    <div class="flex justify-center mt-3 rounded gap-2">
        <div class=" bg-slate-500 w-[80em] h-[32em]">
            <img src="{{ asset('storage/' . $hotel->hotel_image1 . '.jpg') }}" alt="" class="w-full h-full object-cover" data-bs-toggle="modal" data-bs-target="#image1-modal">
        </div>
        <div class="flex flex-col gap-2">
            <div class="flex align-middle bg-slate-300 w-[30rem] h-[15em] flex-grow"><img src="{{ asset('storage/' . $hotel->hotel_image2 . '.jpg') }}" alt="" class="w-full h-full object-cover" data-bs-toggle="modal" data-bs-target="#image2-modal"></div>
            <div class="flex align-middle bg-slate-300 w-[30rem] h-[15em] flex-grow"><img src="{{ asset('storage/' . $hotel->hotel_image3 . '.jpg') }}" alt="" class="w-full h-full object-cover" data-bs-toggle="modal" data-bs-target="#image3-modal"></div>
        </div>
    </div>

    {{-- NAVIGATION --}}
    <div class=" sticky top-[5.559em] flex text-center z-50 bg-white">
        <div class="py-[0.8em] flex-grow my-auto"><a href="#info-umum" class=" no-underline py-2 px-3 text-black hover:border-b-sky-600 hover:border-b-[0.2em] transition">Info Umum</a></div>
        <div class="py-[0.8em] flex-grow my-auto"><a href="#pilih-kamar" class=" no-underline py-2 px-3 text-black hover:border-b-sky-600 hover:border-b-[0.2em] transition">Pilih Kamar</a></div>
        <div class="py-[0.8em] flex-grow my-auto"><a href="#fasilitas" class=" no-underline py-2 px-3 text-black hover:border-b-sky-600 hover:border-b-[0.2em] transition">Fasilitas</a></div>
        <div class="py-[0.8em] flex-grow my-auto"><a href="#fasilitas" class=" no-underline py-2 px-3 text-black hover:border-b-sky-600 hover:border-b-[0.2em] transition">Lokasi</a></div>
        <div class="py-[0.8em] flex-grow my-auto"><a href="#fasilitas" class=" no-underline py-2 px-3 text-black hover:border-b-sky-600 hover:border-b-[0.2em] transition">Ulasan</a></div>
        <div class="py-[0.8em] flex-grow my-auto"><a href="#fasilitas" class=" no-underline py-2 px-3 text-black hover:border-b-sky-600 hover:border-b-[0.2em] transition">Kebijakan Akomodasi</a></div>
    </div>

    {{-- HOTEL --}}
    <div class="flex h-52 mb-3 mt-2">
        <div class="flex-grow my-4">
            <div class="my-1">
                <span class="rounded-full border-blue-300 border-1 p-1 px-3 text-center align-center mr-2">
                    <i class="fa-solid fa-hotel"></i><span>Hotel</span>
                </span>
                @for ($i = 0; $i < $hotel->hotel_star; $i++)
                <i class="fa-solid fa-star"></i>
                @endfor

            </div>
            <h2 class="font-bold text-[3rem]">{{ $hotel->hotel_name }}</h2>

            <div class="text-[1.1rem]">
                <i class="fa-regular fa-thumbs-up pt-1 text-secon z-0"></i>
                <span class="pl-1">4.3/5 - <span class="font-bold">
                    @if ($hotel->hotel_rating <= 5 && $hotel->hotel_rating >= 4.6)
                        {{ "Sangat Bagus" }}
                    @elseif ($hotel->hotel_rating < 4.7 && $hotel->hotel_rating >= 4.0)
                        {{ "Bagus" }}
                    @else
                        {{ "Buruk" }}
                    @endif
                </span>( {{ $hotel->review_count }} ulasan )</span>
            </div>

            <div class="text-sky-700 font-bold mt-2">
                <i class="fa-solid fa-location-dot mr-1"></i><span>{{ $hotel->hotel_address }}</span>
            </div>

        </div>
        <div class="text-right flex flex-col justify-end">
            <div class="mb-4">
                <p class="my-0 text-slate-500 font-bold">Mulai dari</p>
                <p class="text-prim font-extrabold text-[1.5rem] my-0">Rp1.2500.000</p>
                <p class="w-52 my-0 text-[0.7rem] text-slate-500">/kamar/malam</p>
            </div>
            <button
                class="rounded h-10 w-32 self-end text-white bg-gradient-to-r from-cyan-600 to-blue-500 font-bold transition duration-100 hover:scale-105 hover:shadow-2xl">Pilih
                Kamar</button>
        </div>
    </div>

    {{-- BORDER --}}
    <div class="border-slate-200 border-[1px] shadow-sm my-5"></div>

    {{-- REVIEW --}}
    <div>
        <h1 class="font-bold">Ulasan</h1>
        <div class="flex">
            <h1 class="font-bold my-4">4.6<span class="text-[1.2rem] text-slate-500">/5</span></h1>
            <div class=" mt-[1.3em] ml-5 mr-24 ">
                <p class="my-0 font-bold text-[1.4rem]">Bagus</p>
                <p class="my-0 text-slate-500 text-[1rem]">Dari 258 ulasan</p>
            </div>
            <div class="flex-grow pl-8">
                <div class="rounded border-slate-300 border-1 px-8 py-4 shadow-sm mb-4">
                    <div class="flex">
                        <div class="flex-grow"><i
                                class="fa-regular fa-thumbs-up mr-3 text-[1.3rem] translate-y-[-0.1em] z-0"></i><span
                                class="font-bold my-4 text-[1.5rem]">4.6<span
                                    class="text-[1.2rem] text-slate-500">/5</span></span></div>

                        <p class="flex-grow text-right">30 Mei 2024</p>
                    </div>
                    <p class="mt-2 mb-0 text-[1.1rem] font-bold">Alexander Setiawan</p>
                    <div class="w-[42em]">
                        <p class="mt-2 mb-0"><i
                                class="fa-solid fa-quote-left translate-y-[-0.3rem] mr-1 text-[0.8rem]"></i> Lorem ipsum
                            dolor, sit amet consectetur adipisicing elit. Eum magni libero dolores dolorum distinctio?
                            Aliquid, consequuntur. Magni totam tempora dicta quam, nobis, magnam, sint deserunt sed
                            voluptates impedit eligendi illum. <i
                                class="fa-solid fa-quote-right translate-y-1 ml-1 text-[0.8rem]"></i></p>
                    </div>
                </div>

                <div class="rounded border-slate-300 border-1 px-8 py-4 shadow-sm mb-4">
                    <div class="flex">
                        <div class="flex-grow"><i
                                class="fa-regular fa-thumbs-up mr-3 text-[1.3rem] translate-y-[-0.1em]"></i><span
                                class="font-bold my-4 text-[1.5rem]">4.6<span
                                    class="text-[1.2rem] text-slate-500">/5</span></span></div>

                        <p class="flex-grow text-right">30 Mei 2024</p>
                    </div>
                    <p class="mt-2 mb-0 text-[1.1rem] font-bold">Alexander Setiawan</p>
                    <div class="w-[42em]">
                        <p class="mt-2 mb-0"><i
                                class="fa-solid fa-quote-left translate-y-[-0.3rem] mr-1 text-[0.8rem]"></i> Lorem ipsum
                            dolor, sit amet consectetur adipisicing elit. Eum magni libero dolores dolorum distinctio?
                            Aliquid, consequuntur. Magni totam tempora dicta quam, nobis, magnam, sint deserunt sed
                            voluptates impedit eligendi illum. <i
                                class="fa-solid fa-quote-right translate-y-1 ml-1 text-[0.8rem]"></i></p>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <div class="border-slate-200 border-[1px] shadow-sm my-5"></div>

    {{-- FASILITAS --}}
    <div class=" mb-16">
        <h1 class="font-bold mb-4" id="fasilitas">Fasilitas Populer</h1>
        <div class="text-[1.05rem] pt-2">
            <div class="row mb-3">
                <div class="col-4">
                    <i class="fa-solid fa-wifi"></i><span class="ml-4">WiFi</span>
                </div>
                <div class="col-4">
                    <i class="fa-solid fa-square-parking"></i><span class="ml-4">Parkir</span>
                </div>
                <div class="col-4">
                    <i class="fa-solid fa-dumbbell"></i><span class="ml-4">Pusat Kebugaran</span>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-4">
                    <i class="fa-solid fa-temperature-arrow-down"></i><span class="ml-4">AC</span>
                </div>
                <div class="col-4">
                    <i class="fa-solid fa-elevator"></i><span class="ml-4">Lift</span>
                </div>
                <div class="col-4">
                    <i class="fa-solid fa-utensils"></i><span class="ml-4">Restoran</span>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-4">
                    <i class="fa-solid fa-bell-concierge"></i><span class="ml-4">Resepsionis 24 Jam</span>
                </div>
                <div class="col-4">
                    <i class="fa-solid fa-handshake"></i><span class="ml-4">Ruang Meeting</span>
                </div>
            </div>
        </div>
    </div>

    <div class="border-slate-200 border-[1px] shadow-sm my-5"></div>

    <div>
        <h1 class="font-bold mb-4">Lokasi</h1>
        <div class="flex">
            <div class="rounded h-[35em] w-[50em] bg-slate-300 mr-3"></div>
            <div class="flex-grow border-slate-500 border-1"></div>
        </div>
    </div>

    <div class="border-slate-200 border-[1px] shadow-sm my-5"></div>

    <div>
        <h1 class="font-bold">Kebijakan Akomodasi</h1>
    </div>

    <div class="border-slate-200 border-[1px] shadow-sm my-5"></div>

    <div>
        <h1 class="font-bold mb-4" id="pilih-kamar">Pilih Kamar</h1>


        {{-- KAMAR --}}
        <div class="flex gap-3 mb-3">
            <div class=" w-[24.5em] bg-slate-300 h-52">
            </div>
            <div class="flex-grow ">
                <div class="flex h-52 pb-4 mb-3 px-4 border-slate-300 border shadow-md">
                    <div class="flex-grow my-4">
                        <h1 class="font-bold text-[1.5rem] mb-4">Kamar Nigga Super</h1>
                        <div class="row mb-3">
                            <div class="col-4">
                                <i class="fa-solid fa-user-group"></i><span class="ml-4">2 Tamu</span>
                            </div>
                            <div class="col-4">
                                <i class="fa-solid fa-bowl-food"></i><span class="ml-4">Sarapan</span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-4">
                                <i class="fa-solid fa-bed"></i><span class="ml-4">1 Double</span>
                            </div>
                            <div class="col-4">
                                <i class="fa-solid fa-wifi"></i><span class="ml-4">WiFi Gratis</span>
                            </div>
                        </div>

                    </div>
                    <div class="text-right flex flex-col justify-end">
                        <div class="mb-4">
                            <p class="text-prim font-extrabold text-[1.5rem] my-0">Rp1.2500.000</p>
                            <p class="w-52 my-0 text-[0.7rem] text-slate-500">/kamar/malam</p>
                        </div>
                        <button
                            class="rounded h-10 w-32 self-end text-white bg-gradient-to-r from-cyan-600 to-blue-500 font-bold transition duration-100 hover:scale-105 hover:shadow-2xl">Pesan
                            Kamar</button>
                    </div>
                </div>
            </div>
        </div>



        <div class="flex gap-3 mb-2">
            <div class=" w-[24.5em] bg-slate-300 h-52">
            </div>
            <div class="flex-grow ">
                <div class="flex h-52 pb-4 mb-3 px-4 border-slate-300 border shadow-md">
                    <div class="flex-grow my-4">
                        <h1 class="font-bold text-[1.5rem] mb-4">Kamar Nigga Super</h1>
                        <div class="row mb-3">
                            <div class="col-4">
                                <i class="fa-solid fa-user-group"></i><span class="ml-4">2 Tamu</span>
                            </div>
                            <div class="col-4">
                                <i class="fa-solid fa-bowl-food"></i><span class="ml-4">Sarapan</span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-4">
                                <i class="fa-solid fa-bed"></i><span class="ml-4">1 Double</span>
                            </div>
                            <div class="col-4">
                                <i class="fa-solid fa-wifi"></i><span class="ml-4">WiFi Gratis</span>
                            </div>
                        </div>

                    </div>
                    <div class="text-right flex flex-col justify-end">
                        <div class="mb-4">
                            <p class="text-prim font-extrabold text-[1.5rem] my-0">Rp1.2500.000</p>
                            <p class="w-52 my-0 text-[0.7rem] text-slate-500">/kamar/malam</p>
                        </div>
                        <button
                            class="rounded h-10 w-32 self-end text-white bg-gradient-to-r from-cyan-600 to-blue-500 font-bold transition duration-100 hover:scale-105 hover:shadow-2xl">Pesan
                            Kamar</button>
                    </div>
                </div>
            </div>
        </div>


        <div class="flex gap-3 mb-2">
            <div class=" w-[24.5em] bg-slate-300 h-52">
            </div>
            <div class="flex-grow ">
                <div class="flex h-52 pb-4 mb-3 px-4 border-slate-300 border shadow-md">
                    <div class="flex-grow my-4">
                        <h1 class="font-bold text-[1.5rem] mb-4">Kamar Nigga Super</h1>
                        <div class="row mb-3">
                            <div class="col-4">
                                <i class="fa-solid fa-user-group"></i><span class="ml-4">2 Tamu</span>
                            </div>
                            <div class="col-4">
                                <i class="fa-solid fa-bowl-food"></i><span class="ml-4">Sarapan (2pax)</span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-4">
                                <i class="fa-solid fa-bed"></i><span class="ml-4">1 Double</span>
                            </div>
                            <div class="col-4">
                                <i class="fa-solid fa-wifi"></i><span class="ml-4">WiFi Gratis</span>
                            </div>
                        </div>

                    </div>
                    <div class="text-right flex flex-col justify-end">
                        <div class="mb-4">
                            <p class="text-prim font-extrabold text-[1.5rem] my-0">Rp1.2500.000</p>
                            <p class="w-52 my-0 text-[0.7rem] text-slate-500">/kamar/malam</p>
                        </div>
                        <button
                            class="rounded h-10 w-32 self-end text-white bg-gradient-to-r from-cyan-600 to-blue-500 font-bold transition duration-100 hover:scale-105 hover:shadow-2xl">Pesan
                            Kamar</button>
                    </div>
                </div>
            </div>
        </div>



        <div class="flex gap-3 mb-2">
            <div class=" w-[24.5em] bg-slate-300 h-52">
            </div>
            <div class="flex-grow ">
                <div class="flex h-52 pb-4 mb-3 px-4 border-slate-300 border shadow-md">
                    <div class="flex-grow my-4">
                        <h1 class="font-bold text-[1.5rem] mb-4">Kamar Nigga Super</h1>
                        <div class="row mb-3">
                            <div class="col-4">
                                <i class="fa-solid fa-user-group"></i><span class="ml-4">2 Tamu</span>
                            </div>
                            <div class="col-4">
                                <i class="fa-solid fa-bowl-food"></i><span class="ml-4">Sarapan (2pax)</span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-4">
                                <i class="fa-solid fa-bed"></i><span class="ml-4">1 Double</span>
                            </div>
                            <div class="col-4">
                                <i class="fa-solid fa-wifi"></i><span class="ml-4">WiFi Gratis</span>
                            </div>
                        </div>

                    </div>
                    <div class="text-right flex flex-col justify-end">
                        <div class="mb-4">
                            <p class="text-prim font-extrabold text-[1.5rem] my-0">Rp1.2500.000</p>
                            <p class="w-52 my-0 text-[0.7rem] text-slate-500">/kamar/malam</p>
                        </div>
                        <button
                            class="rounded h-10 w-32 self-end text-white bg-gradient-to-r from-cyan-600 to-blue-500 font-bold transition duration-100 hover:scale-105 hover:shadow-2xl">Pesan
                            Kamar</button>
                    </div>
                </div>
            </div>
        </div>



        <div class="flex gap-3 mb-2">
            <div class=" w-[24.5em] bg-slate-300 h-52">
            </div>
            <div class="flex-grow ">
                <div class="flex h-52 pb-4 mb-3 px-4 border-slate-300 border shadow-md">
                    <div class="flex-grow my-4">
                        <h1 class="font-bold text-[1.5rem] mb-4">Kamar Nigga Super</h1>
                        <div class="row mb-3">
                            <div class="col-4">
                                <i class="fa-solid fa-user-group"></i><span class="ml-4">2 Tamu</span>
                            </div>
                            <div class="col-4">
                                <i class="fa-solid fa-bowl-food"></i><span class="ml-4">Sarapan (2pax)</span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-4">
                                <i class="fa-solid fa-bed"></i><span class="ml-4">1 Double</span>
                            </div>
                            <div class="col-4">
                                <i class="fa-solid fa-wifi"></i><span class="ml-4">WiFi Gratis</span>
                            </div>
                        </div>

                    </div>
                    <div class="text-right flex flex-col justify-end">
                        <div class="mb-4">
                            <p class="text-prim font-extrabold text-[1.5rem] my-0">Rp1.2500.000</p>
                            <p class="w-52 my-0 text-[0.7rem] text-slate-500">/kamar/malam</p>
                        </div>
                        <button
                            class="rounded h-10 w-32 self-end text-white bg-gradient-to-r from-cyan-600 to-blue-500 font-bold transition duration-100 hover:scale-105 hover:shadow-2xl">Pesan
                            Kamar</button>
                    </div>
                </div>
            </div>
        </div>





    </div>

    <div class="border-slate-200 border-[1px] shadow-sm my-5"></div>









<div class="modal fade" id="image1-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
                <img class=" object-cover max-h-[90vh] rounded-md m-0" src=" {{ asset('/storage/' . $hotel->hotel_image1 . '.jpg') }}" alt="">
        </div>
    </div>
</div>

<div class="modal fade" id="image2-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
                <img class=" object-cover max-h-[90vh] rounded-md m-0" src=" {{ asset('/storage/' . $hotel->hotel_image1 . '.jpg') }}" alt="">
        </div>
    </div>
</div>

<div class="modal fade" id="image3-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
                <img class=" object-cover max-h-[90vh] max-w-[90vw] rounded-md m-0" src=" {{ asset('/storage/' . $hotel->hotel_image1 . '.jpg') }}" alt="">
        </div>
    </div>
</div>


@endsection
