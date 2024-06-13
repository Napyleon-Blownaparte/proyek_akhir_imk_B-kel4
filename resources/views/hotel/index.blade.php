@extends('layouts.app')

@section('content')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
        // Initialize Select2 for the city input
        $('#city-select').select2({
            placeholder: 'Pilih Kota Tujuan',
            allowClear: true
        });

        const sortState = localStorage.getItem('sortState') || 'down';

        // Apply the saved sort state to all icons
        const applySortStateToIcons = (state) => {
            document.querySelectorAll('.sort-icon').forEach(icon => {
                if (state === 'up') {
                    icon.classList.remove('fa-arrow-down-wide-short');
                    icon.classList.add('fa-arrow-up-wide-short');
                } else {
                    icon.classList.remove('fa-arrow-up-wide-short');
                    icon.classList.add('fa-arrow-down-wide-short');
                }
            });
        };

        applySortStateToIcons(sortState);

        // Add event listeners to buttons
        document.querySelectorAll('.sort-button').forEach(button => {
            button.addEventListener('click', () => {
                let newState = sortState === 'down' ? 'up' : 'down';

                // Apply the new state to all icons
                applySortStateToIcons(newState);

                // Save the new state to localStorage
                localStorage.setItem('sortState', newState);
            });
        });
        });

        });
    </script>
    <form action="/hotel" method="GET">
        <div class="sticky top-0 h-20 bg-sky-700 w-full z-40">
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
                            <div class="flex-grow font-bold">
                                <input type="date" name="checkin" placeholder="dd-mm-yyyy"
                                    value="{{ request()->input('checkin', '2024-05-30') }}">
                            </div>

                        </div>
                    </div>
                    <div
                        class="flex flex-grow  pl-5 transition ease-in-out hover:bg-slate-200 active:bg-slate-300 duration-300 cursor-pointer">
                        <div class="flex-col ml-6 my-auto">
                            <div class="flex-grow text-[0.8rem]">Check-out</div>
                            <div class="flex-grow font-bold"><input type="date"
                                    value="{{ request()->input('checkout', '2024-06-01') }}" name="checkout"></div>
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
                    <div class="flex flex-grow pl-5"
                        style="border-top-right-radius: 9999px; border-bottom-right-radius:9999px;">
                        <button type="submit" value="CARI"
                            class="rounded-xl bg-sky-700 w-[9em] h-[3em] my-auto ml-7 mr-0 transition text-background hover:from-accent hover:scale-105 hover:shadow-2xl active:bg-secon z-100 font-bold text-sm">Yuk,
                            cari!</button>
                    </div>
                </div>
            </div>
        </div>


        <div class="flex my-3">
            <div class="container row mx-auto">
                {{-- FILTER PANEL --}}
                <div class="col-3">

                    <div class="my-4">
                        <p class="font-bold my-0  text-[1.2rem] mb-3">Cari Akomodasi Sesuai Keinginanmu</p>

                        <button type="submit"
                        class=" mb-2 rounded-xl bg-accent w-full h-[3em] transition text-background hover:from-accent hover:scale-105 hover:shadow-2xl active:bg-secon z-100 max-w-[12em] font-bold text-sm">Terapkan
                        Filter</button>
                        <div class="bg-slate-300 h-[1px] my-3 w-[95%] mx-auto"></div>
                        <p class="text-slate-500 text-[0.8rem] my-0 mb-4">Gunakan fitur filter berikut untuk mencari berdasarkan preferensi</p>
                        <p class="font-bold m-0">Rentang Harga</p>
                        <p class="text-slate-500 text-[0.8rem]">Per kamar, per malam</p>
                        <div class="flex justify-between w-[19em]">
                            <input type="number" name="min_price"
                                class="form-control border-black border-1 max-w-32 shadow-sm"
                                value="{{ is_null(request()->input('min_price')) ? 0 : request()->input('min_price') }}">
                            <div class="border-t-black border-t w-2 translate-y-[1.3em]"></div>
                            <input type="number" name="max_price"
                                class="form-control border-black border-1 max-w-32 shadow-sm"
                                value="{{ is_null(request()->input('max_price')) ? 5020100 : request()->input('max_price') }}">
                        </div>
                    </div>

                    <div class="my-5">
                        <p class="font-bold m-0">Peringkat Bintang</p>
                        <div class="flex my-3">
                            <input type="checkbox" name="stars[]" value="1" class="mr-4 w-5 h-5"
                                {{ in_array('1', request()->input('stars', [])) ? 'checked' : '' }}>
                            <i class="fa-solid fa-star mx-[0.1rem] translate-y-[0.05rem] text-yellow-500"></i>
                        </div>
                        <div class="flex my-3">
                            <input type="checkbox" name="stars[]" value="2" class="mr-4 w-5 h-5"
                                {{ in_array('2', request()->input('stars', [])) ? 'checked' : '' }}>
                            <i class="fa-solid fa-star mx-[0.1rem] translate-y-[0.05rem] text-yellow-500"></i>
                            <i class="fa-solid fa-star mx-[0.1rem] translate-y-[0.05rem] text-yellow-500"></i>
                        </div>
                        <div class="flex my-3">
                            <input type="checkbox" name="stars[]" value="3" class="mr-4 w-5 h-5"
                                {{ in_array('3', request()->input('stars', [])) ? 'checked' : '' }}>
                            <i class="fa-solid fa-star mx-[0.1rem] translate-y-[0.05rem] text-yellow-500"></i>
                            <i class="fa-solid fa-star mx-[0.1rem] translate-y-[0.05rem] text-yellow-500"></i>
                            <i class="fa-solid fa-star mx-[0.1rem] translate-y-[0.05rem] text-yellow-500"></i>
                        </div>
                        <div class="flex my-3">
                            <input type="checkbox" name="stars[]" value="4" class="mr-4 w-5 h-5"
                                {{ in_array('4', request()->input('stars', [])) ? 'checked' : '' }}>
                            <i class="fa-solid fa-star mx-[0.1rem] translate-y-[0.05rem] text-yellow-500"></i>
                            <i class="fa-solid fa-star mx-[0.1rem] translate-y-[0.05rem] text-yellow-500"></i>
                            <i class="fa-solid fa-star mx-[0.1rem] translate-y-[0.05rem] text-yellow-500"></i>
                            <i class="fa-solid fa-star mx-[0.1rem] translate-y-[0.05rem] text-yellow-500"></i>
                        </div>
                        <div class="flex my-3">
                            <input type="checkbox" name="stars[]" value="5" class="mr-4 w-5 h-5"
                                {{ in_array('5', request()->input('stars', [])) ? 'checked' : '' }}>
                            <i class="fa-solid fa-star mx-[0.1rem] translate-y-[0.05rem] text-yellow-500"></i>
                            <i class="fa-solid fa-star mx-[0.1rem] translate-y-[0.05rem] text-yellow-500"></i>
                            <i class="fa-solid fa-star mx-[0.1rem] translate-y-[0.05rem] text-yellow-500"></i>
                            <i class="fa-solid fa-star mx-[0.1rem] translate-y-[0.05rem] text-yellow-500"></i>
                            <i class="fa-solid fa-star mx-[0.1rem] translate-y-[0.05rem] text-yellow-500"></i>
                        </div>
                    </div>
                    <div class="my-5">
                        <p class="font-bold m-0">Tipe Akomodasi</p>
                        <div class="flex my-3">
                            <input type="checkbox" name="accommodation_type[]" value="hotel"
                                class="mr-4 w-5 h-5 border rounded-full transition"
                                {{ in_array('hotel', request()->input('accommodation_type', [])) ? 'checked' : '' }}>
                            <p class="my-0">Hotel</p>
                        </div>
                        <div class="flex my-3">
                            <input type="checkbox" name="accommodation_type[]" value="apartment"
                                class="mr-4 w-5 h-5 border rounded-full transition"
                                {{ in_array('apartment', request()->input('accommodation_type', [])) ? 'checked' : '' }}>
                            <p class="my-0">Apartemen</p>
                        </div>
                        <div class="flex my-3">
                            <input type="checkbox" name="accommodation_type[]" value="villa"
                                class="mr-4 w-5 h-5 border rounded-full transition"
                                {{ in_array('villa', request()->input('accommodation_type', [])) ? 'checked' : '' }}>
                            <p class="my-0">Villa</p>
                        </div>
                        <div class="flex my-3">
                            <input type="checkbox" name="accommodation_type[]" value="guesthouse"
                                class="mr-4 w-5 h-5 border rounded-full transition"
                                {{ in_array('guesthouse', request()->input('accommodation_type', [])) ? 'checked' : '' }}>
                            <p class="my-0">Guesthouse</p>
                        </div>
                        <div class="flex my-3">
                            <input type="checkbox" name="accommodation_type[]" value="hostel"
                                class="mr-4 w-5 h-5 border rounded-full transition"
                                {{ in_array('hostel', request()->input('accommodation_type', [])) ? 'checked' : '' }}>
                            <p class="my-0">Hostel</p>
                        </div>
                        <div class="flex my-3">
                            <input type="checkbox" name="accommodation_type[]" value="capsule"
                                class="mr-4 w-5 h-5 border rounded-full transition"
                                {{ in_array('capsule', request()->input('accommodation_type', [])) ? 'checked' : '' }}>
                            <p class="my-0">Hotel Capsul</p>
                        </div>
                    </div>

                </div>

                {{-- HOTEL PANEL --}}
                <div class="col-9 min-h-[180vh]">
                    {{-- Filter Card --}}
                    <div class="flex align-middle mb-3 gap-4">
                        <p class="my-0 self-center">Urutkan berdasarkan</p>
                        <button class="sort-button flex rounded border-sky-700 border-2 px-3 py-[0.2em] shadow-md"
                            name="sort_by" value="price">
                            <div><i class="sort-icon fa-solid fa-arrow-up-wide-short mr-2" data-sort="price"></i></div>
                            <div>Harga<i class="fa-solid fa-dollar-sign text-[0.8rem] ml-2"></i></div>
                        </button>

                        <button class="sort-button flex rounded border-sky-700 border-2 px-3 py-[0.2em] shadow-md"
                            name="sort_by" value="rating">
                            <div><i class="sort-icon fa-solid fa-arrow-down-wide-short mr-2" data-sort="rating"></i></div>
                            <div>Rating<i class="fa-solid fa-thumbs-up text-[0.8rem] ml-2"></i></div>
                        </button>

                        <button class="sort-button flex rounded border-sky-700 border-2 px-3 py-[0.2em] shadow-md"
                            name="sort_by" value="stars">
                            <div><i class="sort-icon fa-solid fa-arrow-down-wide-short mr-2" data-sort="stars"></i></div>
                            <div>Bintang<i class="fa-solid fa-star text-[0.8rem] ml-2"></i></div>
                        </button>
                    </div>


    </form>

    {{-- Hotel Card --}}
    @if ($hotels->isEmpty())
        <div>
            <svg class="svg-icon text-slate-400 m-auto translate-y-20" width="200" height="200"
                style="fill: currentColor;" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M945.643909 899.025661 767.204891 720.555943c-1.134847-1.136893-2.585895-1.641383-3.815909-2.555196 58.732659-68.858274 94.376461-158.0302 94.376461-255.623935 0-217.74114-176.577624-394.350486-394.350486-394.350486-217.771839 0-394.350486 176.608324-394.350486 394.350486 0 34.792411 4.952802 68.322062 13.406335 100.464109 10.219759-15.58393 36.712133-52.364625 52.549843-59.237149-1.702782-13.532201-2.838651-27.220968-2.838651-41.22696 0-182.917006 148.31493-331.264683 331.264683-331.264683s331.263659 148.346653 331.263659 331.264683c0 143.771451-91.758844 265.811971-219.7284 311.643809-6.088672 25.960255-15.929808 50.720172-29.335119 73.747631 65.640999-14.005992 125.32124-44.097334 174.432775-86.301552 0.914836 1.199315 1.419326 2.648316 2.524496 3.784186l178.468694 178.375573c12.33391 12.396331 32.268938 12.396331 44.601824 0C958.007495 931.355997 958.007495 911.358547 945.643909 899.025661L945.643909 899.025661zM480.417189 541.360701c-45.421492-45.421492-105.827257-70.436212-170.111353-70.436212-64.284095 0-124.657114 25.01472-170.07963 70.436212-45.453215 45.422516-70.466911 105.826234-70.466911 170.109306 0 64.285119 25.013697 124.658138 70.466911 170.111353 45.453215 45.454238 105.857956 70.465888 170.111353 70.465888 0 0 0 0 0.030699 0 64.253396 0 124.659161-25.045419 170.07963-70.465888 45.422516-45.388746 70.437236-105.826234 70.437236-170.111353C550.853401 647.217634 525.837658 586.812893 480.417189 541.360701zM435.815365 836.979536c-33.530674 33.531698-78.100776 51.982932-125.477806 51.982932l0 0c-47.408753 0-92.010577-18.48398-125.509529-51.982932-33.529651-33.529651-51.982932-78.099752-51.982932-125.509529 0-47.408753 18.453281-91.977831 51.982932-125.506459 33.529651-33.532721 78.069053-51.953256 125.477806-51.953256 47.409776 0 91.978854 18.453281 125.509529 51.953256 33.529651 33.529651 51.981908 78.097706 51.981908 125.506459C487.797273 758.911506 469.345016 803.450908 435.815365 836.979536zM420.895561 600.914052c-12.33391-12.335956-32.268938-12.335956-44.601824 0l-65.988924 65.986877-65.9879-65.986877c-12.332886-12.335956-32.267914-12.335956-44.600801 0-12.33391 12.332886-12.33391 32.266891 0 44.601824l65.986877 65.985854-65.986877 65.9879c-12.33391 12.332886-12.33391 32.267914 0 44.601824 6.15007 6.151094 14.226003 9.242502 22.299889 9.242502 8.075933 0 16.150842-3.091408 22.300912-9.242502l65.9879-65.986877 65.988924 65.986877c6.15007 6.151094 14.224979 9.242502 22.299889 9.242502 8.075933 0 16.150842-3.091408 22.300912-9.242502 12.33391-12.33391 12.33391-32.268938 0-44.601824l-65.986877-65.9879 65.986877-65.985854C433.196725 633.212666 433.196725 613.246939 420.895561 600.914052L420.895561 600.914052z" />
            </svg>
            <p class="text-slate-500 text-center translate-y-[6em]">Pencarian tidak ditemukan :(</p>
        </div>
    @else
        @foreach ($hotels as $hotel)
            <div class="rounded-md flex h-52 border-slate-300 border-1 mb-3">
                <div>
                    <div
                        class="flex justify-center align-middle overflow-hidden rounded-l-md bg-slate-400 w-64 h-[14.338em]">
                        <img src="{{ '/storage/' . $hotel->hotel_image1 . '.jpg' }}" alt=""
                            class="max-w-[100%] max-h-[100%] flex-shrink-0">
                    </div>
                </div>
                <div class="flex-grow ml-6 mt-4">
                    <h2 class="font-bold"> {{ $hotel->hotel_name }}</h2>
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
                    <div class="mt-2 my-1 flex">
                        <div class="mr-3">
                            @for ($i = 0; $i < $hotel->hotel_star; $i++)
                                <i class="fa-solid fa-star text-yellow-500"></i>
                            @endfor
                        </div>
                        <i class="fa-solid fa-location-dot self-center mr-1 text-sky-700"></i>
                        <span class="text-sky-700 font-bold">{{ $hotel->hotel_address }}</span>
                    </div>
                    <div>
                        <i class="fa-regular fa-thumbs-up pt-1 text-secon"></i>
                        <span class="pl-1">{{ $hotel->hotel_rating }}/5 - @if ($hotel->hotel_rating <= 5 && $hotel->hotel_rating >= 4.6)
                                {{ 'Sangat Bagus' }}
                            @elseif ($hotel->hotel_rating < 4.7 && $hotel->hotel_rating >= 4.0)
                                {{ 'Bagus' }}
                            @else
                                {{ 'Buruk' }}
                            @endif ({{ $hotel->review_count }}
                            ulasan)</span>
                    </div>
                </div>
                <div class="text-right flex flex-col justify-end m-4">
                    <div class="mb-4">
                        <p class="text-prim font-extrabold text-[1.5rem] my-0">
                            Rp{{ number_format($hotel->hotel_start_price, 0, '.', '.') }}</p>
                        <p class="w-52 my-0 text-[0.7rem] text-slate-500">/kamar/malam</p>
                    </div>
                    <a href="{{ url('/hotel/' . $hotel->id) . '?' . http_build_query(request()->query()) }}"
                        class="pt-2 block text-center no-underline rounded h-10 w-32 self-end text-white bg-gradient-to-r from-cyan-600 to-blue-500 font-bold transition duration-100 hover:scale-105 hover:shadow-2xl">
                        Lihat Kamar
                    </a>

                </div>
            </div>
        @endforeach
    @endif
    <p class="text-black">
        {{ $hotels->appends(request()->query())->onEachSide(5)->links() }}
    </p>
    <p class=" font-light">Menampilkan {{ $hotels->firstItem() }} - {{ $hotels->lastItem() }} dari <span class="ml-1"> ({{ $hotels->total() }} hasil pencarian)</span></p>



    </div>
    </div>
    </div>

@endsection
