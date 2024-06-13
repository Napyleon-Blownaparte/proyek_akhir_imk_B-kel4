@extends('layouts.app')

@section('content')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize Select2 for the city input
            $('#city-select').select2({
                placeholder: 'Pilih Kota Tujuan',
                allowClear: true
            });
        });
    </script>
    <form action="/hotel" method="GET" class="sticky top-0 z-40">
        <div class=" h-20 bg-sky-700 w-full ">
            <div
                class="mx-auto h-14 w-[80em] rounded shadow-2xl text-t bg-white border-gray-300 border-3 overflow-x-auto translate-y-[0.7em]">
                <div class="flex align-middle w-65 mx-auto h-100">
                    <div class="group flex flex-grow pl-7 transition ease-in-out hover:bg-slate-200 active:bg-slate-300 duration-300 cursor-pointer"
                        style="border-top-left-radius: 9999px; border-bottom-left-radius:9999px;">
                        <div class="fa-solid fa-location-dot fa-lg align-middle m-auto mx-0"></div>
                        <div class="flex-col ml-6 my-auto">
                            <div class="flex-grow text-[0.8rem]">Destinasi</div>
                            <div class="flex-grow font-bold">
                                <select id="city-select" name="cari"
                                    class="cursor-pointer w-[10em] transition group-hover:bg-slate-200 duration-300">
                                    <option value="">Pilih Kota Tujuan</option>
                                    <option value="Surabaya" {{ request()->input('cari') == 'Surabaya' ? 'selected' : '' }}>
                                        Surabaya</option>
                                    <option value="Jakarta" {{ request()->input('cari') == 'Jakarta' ? 'selected' : '' }}>
                                        Jakarta</option>
                                    <option value="Bandung" {{ request()->input('cari') == 'Bandung' ? 'selected' : '' }}>
                                        Bandung</option>
                                    <option value="Bali" {{ request()->input('cari') == 'Bali' ? 'selected' : '' }}>Bali
                                    </option>
                                    <option value="Yogyakarta"
                                        {{ request()->input('cari') == 'Yogyakarta' ? 'selected' : '' }}>Yogyakarta</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div
                        class="flex flex-grow  pl-5 transition ease-in-out hover:bg-slate-200 active:bg-slate-300 duration-300 cursor-pointer">
                        <div class="flex-col ml-6 my-auto">
                            <div class="flex-grow text-[0.8rem]">Check-in</div>
                            <div class="flex-grow font-bold"><input type="date" name="checkin" value="{{ request()->input('checkin') }}"></div>
                        </div>
                    </div>
                    <div
                        class="flex flex-grow  pl-5 transition ease-in-out hover:bg-slate-200 active:bg-slate-300 duration-300 cursor-pointer">
                        <div class="flex-col ml-6 my-auto">
                            <div class="flex-grow text-[0.8rem]">Check-out</div>
                            <div class="flex-grow font-bold"><input type="date" name="checkout" value="{{ request()->input('checkout') }}"></div>
                        </div>
                    </div>
                    <div
                        class="flex flex-grow  pl-5 transition ease-in-out hover:bg-slate-200 active:bg-slate-300 duration-300 cursor-pointer">
                        <div class="fa-solid fa-bed fa-lg align-middle m-auto mx-0"></div>
                        <div class="flex-col ml-6 my-auto">
                            <div class="flex-grow text-[0.8rem]">Jumlah Tamu</div>
                            <div class="flex-grow font-bold"><input class="w-6" type="number" value="{{ request()->input('tamu', 1) }}"
                                    name="tamu"> orang</div>
                        </div>
                    </div>
                    <div class="flex flex-grow pl-5"
                        style="border-top-right-radius: 9999px; border-bottom-right-radius:9999px;">
                        <button type="submit" value="CARI"
                            class="rounded-xl bg-sky-700 w-[9em] h-[3em] my-auto ml-7 mr-0 transition text-background hover:from-accent hover:scale-105 hover:shadow-2xl active:bg-secon z-100 font-bold text-sm">Yuk,
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
                <img src="{{ asset('storage/' . $hotel->hotel_image1 . '.jpg') }}" alt=""
                    class="w-full h-full object-cover" data-bs-toggle="modal" data-bs-target="#image1-modal">
            </div>
            <div class="flex flex-col gap-2">
                <div class="flex align-middle bg-slate-300 w-[30rem] h-[15em] flex-grow"><img
                        src="{{ asset('storage/' . $hotel->hotel_image2 . '.jpg') }}" alt=""
                        class="w-full h-full object-cover" data-bs-toggle="modal" data-bs-target="#image2-modal"></div>
                <div class="flex align-middle bg-slate-300 w-[30rem] h-[15em] flex-grow"><img
                        src="{{ asset('storage/' . $hotel->hotel_image3 . '.jpg') }}" alt=""
                        class="w-full h-full object-cover" data-bs-toggle="modal" data-bs-target="#image3-modal"></div>
            </div>
        </div>

        {{-- NAVIGATION --}}
        <div class=" sticky top-[5.559em] flex text-center z-50 bg-white">
            <div class="py-[0.8em] flex-grow my-auto"><a href="#info-umum"
                    class=" no-underline py-2 px-3 text-black hover:border-b-sky-600 hover:border-b-[0.2em] transition">Info
                    Umum</a></div>
            <div class="py-[0.8em] flex-grow my-auto"><a href="#pilih-kamar"
                    class=" no-underline py-2 px-3 text-black hover:border-b-sky-600 hover:border-b-[0.2em] transition">Pilih
                    Kamar</a></div>
            <div class="py-[0.8em] flex-grow my-auto"><a href="#fasilitas"
                    class=" no-underline py-2 px-3 text-black hover:border-b-sky-600 hover:border-b-[0.2em] transition">Fasilitas</a>
            </div>
            <div class="py-[0.8em] flex-grow my-auto"><a href="#lokasi"
                    class=" no-underline py-2 px-3 text-black hover:border-b-sky-600 hover:border-b-[0.2em] transition">Lokasi</a>
            </div>
            <div class="py-[0.8em] flex-grow my-auto"><a href="#ulasan"
                    class=" no-underline py-2 px-3 text-black hover:border-b-sky-600 hover:border-b-[0.2em] transition">Ulasan</a>
            </div>
            <div class="py-[0.8em] flex-grow my-auto"><a href="#kebijakanakomodasi"
                    class=" no-underline py-2 px-3 text-black hover:border-b-sky-600 hover:border-b-[0.2em] transition">Kebijakan
                    Akomodasi</a></div>
        </div>

        {{-- HOTEL --}}
        <div class="flex h-52 mb-3 mt-2">

            <div class="flex-grow">
                <div class="font-semibold cursor-pointer group"><i class="fa fa-arrow-left rounded-full bg-sky-700 text-white p-[0.4em] mb-4 mr-1"></i><a href="{{ url('/hotel') . '?' . http_build_query(request()->query()) }}" class="text-decoration-none text-black hover:border-b-sky-600 hover:border-b-[0.2em] transition pb-1">Kembali</a></div>
                <div class="my-1">
                    <span class="rounded-full border-blue-300 border-1 p-1 px-3 text-center align-center mr-2">
                        @if ($hotel->hotel_category == 'Hotel')
                            <i class="fa-solid fa-hotel mr-2"></i><span>Hotel</span>
                        @elseif ($hotel->hotel_category == 'Apartment')
                            <i class="fa-solid fa-hotel mr-2"></i><span>Apartment</span>
                        @elseif ($hotel->hotel_category == 'Villa')
                            <i class="fa-solid fa-house-tsunami mr-2"></i><span>Villa</span>
                        @elseif ($hotel->hotel_category == 'Guesthouse')
                            <i class="fa-solid fa-place-of-worsthip mr-2"></i><span>Guesthouse</span>
                        @elseif ($hotel->hotel_category == 'Hostel')
                            <i class="fa-solid fa-bell-concierge mr-2"></i><span>Hostel</span>
                        @elseif ($hotel->hotel_category == 'Capsule')
                        <i class="fa-solid fa-capsules mr-2"></i><span>Capsule</span>
                        @endif
                    </span>
                    @for ($i = 0; $i < $hotel->hotel_star; $i++)
                        <i class="fa-solid fa-star text-yellow-500"></i>
                    @endfor

                </div>
                <h2 class="font-bold text-[3rem]">{{ $hotel->hotel_name }}</h2>

                <div class="text-[1.1rem]">
                    <i class="fa-regular fa-thumbs-up pt-1 text-secon z-0"></i>
                    <span class="pl-1">4.3/5 - <span class="font-bold">
                            @if ($hotel->hotel_rating <= 5 && $hotel->hotel_rating >= 4.6)
                                {{ 'Sangat Bagus' }}
                            @elseif ($hotel->hotel_rating < 4.7 && $hotel->hotel_rating >= 4.0)
                                {{ 'Bagus' }}
                            @else
                                {{ 'Buruk' }}
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
                    <p class="text-prim font-extrabold text-[1.5rem] my-0">
                        Rp{{ number_format($hotel->hotel_start_price, 0, '.', '.') }}</p>
                    <p class="w-52 my-0 text-[0.7rem] text-slate-500">/kamar/malam</p>
                </div>
                <a href="#pilih-kamar">
                <button id="ulasan"
                    class="rounded h-10 w-32 self-end text-white bg-gradient-to-r from-cyan-600 to-blue-500 font-bold transition duration-100 hover:scale-105 hover:shadow-2xl">Pilih
                    Kamar</button>
                </a>
            </div>
        </div>

        {{-- BORDER --}}
        <div class="border-slate-200 border-[1px] shadow-sm my-5"></div>

        {{-- REVIEW --}}
        <div>
            <h1 class="font-bold">Ulasan</h1>
            <div class="flex">
                <h1 class="font-bold my-4 text-[3rem]">{{ $hotel->hotel_rating }}<span class="text-[1.2rem] text-slate-500">/5</span></h1>
                <div class="mt-6 ml-5 w-[50em]">
                    <p class="my-0 font-bold text-[1.7rem]">
                        @if ($hotel->hotel_rating <= 5 && $hotel->hotel_rating >= 4.6)
                            {{ 'Sangat Bagus' }}
                        @elseif ($hotel->hotel_rating < 4.7 && $hotel->hotel_rating >= 4.0)
                            {{ 'Bagus' }}
                        @else
                            {{ 'Buruk' }}
                        @endif
                    </p>
                    <p class="my-0 text-slate-500 text-base">Dari {{ $hotel->review_count }} ulasan</p>
                </div>
                <div class="flex-grow pl-8 max-h-96 overflow-y-scroll">
                    <!-- Review 1 -->
                    <div class="rounded border border-slate-300 px-8 py-4 shadow-sm mb-4">
                        <div class="flex">
                            <div class="flex-grow">
                                <i class="fa-regular fa-thumbs-up mr-3 text-xl align-middle"></i>
                                <span class="font-bold text-xl">4.2<span class="text-[1.2rem] text-slate-500">/5</span></span>
                            </div>
                            <p class="flex-grow text-right">21 Mei 2024</p>
                        </div>
                        <p class="mt-2 mb-0 text-lg font-bold">Timothy Gilbert</p>
                        <div class="w-full">
                            <p class="mt-2 mb-0">
                                <i class="fa-solid fa-quote-left align-middle mr-1 text-sm translate-y-[-0.3rem]"></i>
                                Tidak ada yang istimewa, tetapi layanan dan fasilitasnya cukup memadai untuk kebutuhan dasar. Lokasinya strategis dan kamar cukup nyaman. Cocok untuk menginap singkat.
                                <i class="fa-solid fa-quote-right align-middle ml-1 text-sm translate-y-[0.2rem]"></i>
                            </p>
                        </div>
                    </div>
                    <!-- Review 2 -->
                    <div class="rounded border border-slate-300 px-8 py-4 shadow-sm mb-4">
                        <div class="flex">
                            <div class="flex-grow">
                                <i class="fa-regular fa-thumbs-up mr-3 text-xl align-middle"></i>
                                <span class="font-bold text-xl">4.6<span class="text-[1.2rem] text-slate-500">/5</span></span>
                            </div>
                            <p class="flex-grow text-right">25 Mei 2024</p>
                        </div>
                        <p class="mt-2 mb-0 text-lg font-bold">Fredrik Silvanus</p>
                        <div class="w-full">
                            <p class="mt-2 mb-0">
                                <i class="fa-solid fa-quote-left align-middle mr-1 text-sm translate-y-[-0.3rem]"></i>
                                Tidak hanya lokasinya yang strategis, hotel ini juga menawarkan kamar yang bersih dan nyaman dengan pelayanan yang ramah. Sarapan yang lezat dan fasilitas lengkap membuat pengalaman menginap semakin menyenangkan.
                                <i class="fa-solid fa-quote-right align-middle ml-1 text-sm translate-y-[0.2rem]"></i>
                            </p>
                        </div>
                    </div>
                    <!-- Additional Reviews -->
                    <!-- Add more review blocks as needed -->
                    <div class="rounded border border-slate-300 px-8 py-4 shadow-sm mb-4">
                        <div class="flex">
                            <div class="flex-grow">
                                <i class="fa-regular fa-thumbs-up mr-3 text-xl align-middle"></i>
                                <span class="font-bold text-xl">4.8<span class="text-[1.2rem] text-slate-500">/5</span></span>
                            </div>
                            <p class="flex-grow text-right">30 Mei 2024</p>
                        </div>
                        <p class="mt-2 mb-0 text-lg font-bold">Anna Smith</p>
                        <div class="w-full">
                            <p class="mt-2 mb-0">
                                <i class="fa-solid fa-quote-left align-middle mr-1 text-sm translate-y-[-0.3rem]"></i>
                                Hotel yang luar biasa dengan pelayanan terbaik. Sangat bersih dan nyaman, serta sarapan yang enak.
                                <i class="fa-solid fa-quote-right align-middle ml-1 text-sm translate-y-[0.2rem]"></i>
                            </p>
                        </div>
                    </div>
                    <!-- Add more reviews as necessary -->
                </div>
            </div>
        </div>


        <div class="border-slate-200 border-[1px] shadow-sm my-5"></div>

        {{-- FASILITAS --}}
        <div class=" mb-16">
            <h1 class="font-bold mb-4">Fasilitas Populer</h1>
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
                        <i class="fa-solid fa-handshake"></i><span class="ml-4" id="lokasi">Ruang Meeting</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="border-slate-200 border-[1px] shadow-sm my-5"></div>

        <div>
            <h1 class="font-bold mb-4">Lokasi</h1>
            <div class="flex rounded-xl border-slate-300 border-3 shadow-md" >
                {{-- <img src="{{ asset('/storage/map.png') }}" class="object-fit-cover" alt=""> --}}
                    {{-- {{ dd(asset('/storage/map')) }} --}}
                    <iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9413.364537773292!2d112.74079538805653!3d-7.259924423933181!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f960cc059bc9%3A0xd6d43e7b67c5de11!2sSwiss-Belinn%20Tunjungan%2C%20Surabaya!5e0!3m2!1sen!2sid!4v1717940449796!5m2!1sen!2sid" width="1150" height="640" class="rounded-xl" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>            </div>
        </div>

        <div class="border-slate-200 border-[1px] shadow-sm my-5" id="kebijakanakomodasi" ></div>

        <div>
            <h1 class="font-bold mb-4" >Kebijakan Akomodasi</h1>
            <div class="row my-2">
                <div class="col-5">
                    <h5 class="font-bold">Prosedur Check-in</h5>
                </div>
                <div class="col-7">
                    <div class="flex">
                        <div class="mr-3">
                            <p class="font-bold my-0">Check-In</p>
                            <p class="my-0">14:00-23:59</p>
                        </div>
                        <div class="mr-3 bg-slate-400 h-[2px] my-3 w-[3%] translate-y-[1.1em]"></div>
                        <div class="mr-3">
                            <p class="font-bold my-0">Check-Out</p>
                            <p class="my-0">12:00</p>
                        </div>
                    </div>
                    <p class="mt-3">Biaya penambahan orang dapat berlaku dan berbeda-beda menurut kebijakan propertiTanda pengenal berfoto yang dikeluarkan oleh pemerintah dan kartu kredit atau deposit uang tunai diperlukan saat check-in untuk biaya tidak terduga</p>
                </div>
            </div>
            <div class="row my-2">
                <div class="col-5">
                    <h5 class="font-bold">Kebijakan Lainnya</h5>
                </div>
                <div class="col-7">
                    <p class="font-bold my-0">Anak</p>
                    <p>
                        Hanya tamu berumur 17 tahun ke atas yang bisa menginap di sini.

Anak-anak 6 tahun ke atas dianggap sebagai tamu dewasa.

Pastikan umur anak yang menginap sesuai dengan detail pemesanan. Jika berbeda, tamu mungkin akan dikenakan biaya tambahan saat check-in.
                    </p>
                    <p class="font-bold my-0">Deposit</p>
                    <p>
                        Tamu tidak perlu membayar deposit saat check-in.
                    </p>
                    <p class="font-bold my-0" >Sarapan</p>
                    <p  id="pilih-kamar">Sarapan tersedia pukul 06:00 - 10:00 waktu lokal.</p>
                </div>
            </div>
        </div>

        <div class="border-slate-200 border-[1px] shadow-sm my-5"  ></div>

        <div>
            <h1 class="font-bold mb-4" >Pilih Kamar</h1>


            {{-- KAMAR --}}
            <div class="flex gap-3 mb-3">
                <div class=" w-[24.5em] bg-slate-300 h-52">
                    <img src="{{ '/storage' . $hotel->room_image1 . '.jpg' }}" alt="" class="w-full h-full object-cover">
                </div>
                <div class="flex-grow ">
                    <div class="flex h-52 pb-4 mb-3 px-4 border-slate-300 border shadow-md">
                        <div class="flex-grow my-4">
                            <h1 class="font-bold text-[1.5rem] mb-4">Kamar Standar</h1>
                            <div class="row mb-3">
                                <div class="col-4">
                                    <i class="fa-solid fa-user-group"></i><span class="ml-4">2 Tamu</span>
                                </div>
                                <div class="col-4">
                                    <i class="fa-solid fa-bowl-food"></i><span class="ml-4">Sarapan (1pax)</span>
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
                                <p class="text-prim font-extrabold text-[1.5rem] my-0">Rp548.000</p>
                                <p class="w-52 my-0 text-[0.7rem] text-slate-500">/kamar/malam</p>
                            </div>
                            <a href="{{ "/room/" . $hotel->id . "/1" . '?' . http_build_query(request()->query())  }}">
                                <button
                                    class="rounded h-10 w-32 self-end text-white bg-gradient-to-r from-cyan-600 to-blue-500 font-bold transition duration-100 hover:scale-105 hover:shadow-2xl">Pesan
                                    Kamar</button>
                            </a>

                        </div>
                    </div>
                </div>
            </div>







            <div class="flex gap-3 mb-2">
                <div class=" w-[24.5em] bg-slate-300 h-52">
                    <img src="{{ '/storage' . $hotel->room_image2 . '.jpg' . '?' . http_build_query(request()->query()) }}" alt="" class="w-full h-full object-cover">
                </div>
                <div class="flex-grow ">
                    <div class="flex h-52 pb-4 mb-3 px-4 border-slate-300 border shadow-md">
                        <div class="flex-grow my-4">
                            <h1 class="font-bold text-[1.5rem] mb-4">Kamar Deluxe</h1>
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
                                <p class="text-prim font-extrabold text-[1.5rem] my-0">Rp893.500</p>
                                <p class="w-52 my-0 text-[0.7rem] text-slate-500">/kamar/malam</p>
                            </div>
                            <a href="{{ "/room/" . $hotel->id . "/2" . '?' . http_build_query(request()->query())  }}">
                                <button
                                    class="rounded h-10 w-32 self-end text-white bg-gradient-to-r from-cyan-600 to-blue-500 font-bold transition duration-100 hover:scale-105 hover:shadow-2xl">Pesan
                                    Kamar</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>



            <div class="flex gap-3 mb-2">
                <div class=" w-[24.5em] bg-slate-300 h-52">
                    <img src="{{ '/storage' . $hotel->room_image3 . '.jpg' }}" alt="" class="w-full h-full object-cover">
                </div>

                <div class="flex-grow ">
                    <div class="flex h-52 pb-4 mb-3 px-4 border-slate-300 border shadow-md">
                        <div class="flex-grow my-4">
                            <h1 class="font-bold text-[1.5rem] mb-4">Kamar Suite Eksekutif</h1>
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
                                    <i class="fa-solid fa-bed"></i><span class="ml-4">1 King Size</span>
                                </div>
                                <div class="col-4">
                                    <i class="fa-solid fa-wifi"></i><span class="ml-4">WiFi Gratis</span>
                                </div>
                            </div>

                        </div>
                        <div class="text-right flex flex-col justify-end">
                            <div class="mb-4">
                                <p class="text-prim font-extrabold text-[1.5rem] my-0">Rp1.725.750</p>
                                <p class="w-52 my-0 text-[0.7rem] text-slate-500">/kamar/malam</p>
                            </div>
                            <a href="{{ "/room/" . $hotel->id . "/3" . '?' . http_build_query(request()->query()) }}">
                                <button
                                    class="rounded h-10 w-32 self-end text-white bg-gradient-to-r from-cyan-600 to-blue-500 font-bold transition duration-100 hover:scale-105 hover:shadow-2xl">Pesan
                                    Kamar</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>





        </div>

        <div class="border-slate-200 border-[1px] shadow-sm my-5"></div>









        <div class="modal fade" id="image1-modal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <img class=" object-cover max-h-[90vh] rounded-md m-0"
                        src=" {{ asset('/storage' . $hotel->hotel_image1 . '.jpg') }}" alt="">
                </div>
            </div>
        </div>

        <div class="modal fade" id="image2-modal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <img class=" object-cover max-h-[90vh] rounded-md m-0"
                        src=" {{ asset('/storage' . $hotel->hotel_image2 . '.jpg') }}" alt="">
                </div>
            </div>
        </div>

        <div class="modal fade" id="image3-modal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <img class=" object-cover max-h-[90vh] max-w-[90vw] rounded-md m-0"
                        src=" {{ asset('/storage' . $hotel->hotel_image3 . '.jpg') }}" alt="">
                </div>
            </div>
        </div>
    @endsection
