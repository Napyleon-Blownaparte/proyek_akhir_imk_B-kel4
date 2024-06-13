@extends('layouts.app')

@section('content')
<div class="container">
    <ol class=" flex p-6 justify-center items-center w-[60em] mx-auto text-sm font-medium text-center dark:text-gray-300 sm:text-base">
        <li class="flex md:w-full items-center after:content-[''] after:w-full after:h-1 after:border-b after:border-slate-300 after:border-1 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10 dark:after:border-slate-300">
            <span class="flex items-center after:content-['/'] sm:after:hidden after:mx-2 after:text-white dark:after:text-white">
                <span class="me-2 text-white rounded-full bg-sky-700 py-1 px-[0.7em]">1</span>
                <span class="hidden sm:inline-flex sm:ms-2 text-black w-[8em]">Form Reservasi</span>
            </span>
        </li>

        <li class="flex md:w-full items-center after:content-[''] after:w-full after:h-1 after:border-b after:border-slate-300 after:border-1 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10 dark:after:border-slate-300">
            <span class="me-2 text-black rounded-full bg-white border-sky-700 border-3 py-1 px-[0.7em]">2</span>
            <span class="hidden sm:inline-flex sm:ms-2 text-black">Pembayaran</span>
        </li>
        <li class="flex items-center">
            <span class="me-2 text-black rounded-full bg-white border-sky-700 border-3 py-1 px-[0.7em]">3</span>
            <span class="hidden sm:inline-flex sm:ms-2 text-black">Selesai</span>
        </li>
    </ol>
</div>

<div class="container min-h-[100em]">
<div class="px-3 py-0.5 pt-3.5 mx-5 bg-sky-100 rounded-xl shadow-sm">
    <div class="flex">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5m-1.5 3h1.5m-1.5 3h1.5m3-6H15m-1.5 3H15m-1.5 3H15M9 21v-3.375c0-.621.504-1.125 1.125-1.125h3.75c.621 0 1.125.504 1.125 1.125V21" />
        </svg>
        <p class="px-1 font-bold">{{ $hotel->hotel_name}}</p>
    </div>

    <div class="flex pt-2">
        <div class="p-1 text-sm">
            Check-in:
        </div>
        <div class="p-1 px-3.5 text-sm">
            {{ request()->input('checkin')}}
        </div>
    </div>

    <div class="flex">
        <div class="p-1 text-sm">
            Check-out:
        </div>
        <div class="p-1 text-sm">
           {{ request()->input('checkout') }}
        </div>
    </div>

    <div class="border-t border-gray-300 -mx-3 my-3">
        <p class="mx-4 pt-2 font-bold text-[1rem]">{{ $room->name }}</p>
        <p class="text-gray-500 text-xs mx-5 pt-1">{{ $room->bed }}</p>
        <p class="text-gray-500 text-xs mx-5 pt-1">{{ request()->input('tamu') }} Orang</p>
    </div>
</div>

<div class="bg-gray-50 p-8 rounded-lg shadow-xl">
    <p class="text-2xl font-bold text-gray-900 mb-6">Data Pemesan</p>

    <div class="p-6 bg-white rounded-lg shadow-md">
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
            <div>
                <label for="username" class="block text-sm font-medium text-gray-700 mb-2">Nama Lengkap</label>
                <input type="text" name="username" id="username" autocomplete="username" class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm p-3 transition duration-300 ease-in-out hover:shadow-lg" placeholder="Masukkan username">
            </div>

            <div>
                <label for="telp" class="block text-sm font-medium text-gray-700 mb-2">Nomor Telepon</label>
                <div class="flex">
                    <div class="rounded bg-slate-200 mr-2 p-3 self-center">+62</div>
                    <input type="tel" name="telp" id="telp" autocomplete="telp" class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm p-3 transition duration-300 ease-in-out hover:shadow-lg" placeholder="Masukkan no handphone">
                </div>
            </div>

            <div class="sm:col-span-2">
                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                <input type="email" name="email" id="email" autocomplete="email" class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm p-3 transition duration-300 ease-in-out hover:shadow-lg" placeholder="Masukkan email">
            </div>
        </div>
    </div>

    <div class="flex justify-between">
        <div class="flex-grow">
            <p class="mt-8 text-2xl font-bold text-gray-900 mb-6">Permintaan Khusus</p>

            <div class="p-6 pt-6 w-[95%] bg-white rounded-lg shadow-md h-[13.55em] text-[1.2rem]">
                {{-- <label for="req" class="block text-sm font-medium text-gray-700 mb-2">Pilih Permintaan Khusus</label> --}}
                <div class="row mb-3">
                    <div class="col-6 flex">
                        <input type="checkbox" class="my-auto mr-4 w-5 h-5">
                        <p class="my-0">Kamar Bebas Rokok</p>
                    </div>
                    <div class="col-6 flex">
                        <input type="checkbox"  class="my-auto mr-4 w-5 h-5">
                        <p class="my-0">Kamar di Lantai Tinggi</p>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-6 flex">
                        <input type="checkbox" class="my-auto mr-4 w-5 h-5">
                        <p class="my-0">Layanan Antar Jemput</p>
                    </div>
                    <div class="col-6 flex">
                        <input type="checkbox"  class="my-auto mr-4 w-5 h-5">
                        <p class="my-0">Extra Bed</p>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-6 flex">
                        <input type="checkbox" class="my-auto mr-4 w-5 h-5">
                        <p class="my-0">Fasilitas Hewan Peliharaan</p>
                    </div>
                </div>

            </div>
        </div>

        <div class="flex-grow">
            <h3 class="mb-4 mt-[1.3em] font-bold">Rincian Pesanan</h3>
            <div class="rounded-xl shadow-md p-3 px-3">

                <div class="flex m-2">
                    <div class="rounded-xl w-[4em] h-[4em] bg-slate-300">
                        <img src="{{ '/storage' . $hotel->hotel_image1 . '.jpg' }}" alt="" class=" rounded-xl w-full h-full object-cover">
                    </div>
                    <p class="font-bold self-center ml-3 text-[1rem] my-0">{{ $hotel->hotel_name }}</p>
                </div>
                <div class="bg-slate-300 h-[1px] my-3 w-[95%] mx-auto"></div>
                <div class="flex justify-around">
                    <div>
                        <p class="font-bold my-0">Check-In</p>
                        <p class="my-0">{{ request()->input('checkin') }}</p>
                    </div>
                    <div class="bg-slate-400 h-[2px] my-3 w-[3%] translate-y-[1.1em]"></div>
                    <div>
                        <p class="font-bold my-0">Check-Out</p>
                        <p class="my-0">{{ request()->input('checkout') }}</p>
                    </div>
                </div>

                <div class="m-3 p-3 rounded bg-gradient-to-br to-blue-100 from-sky-100 transition-all duration-300"
                    id="details1" style="display: none;">
                    <p class="font-bold my-0">{{ $room->name }}</p>
                    <div>
                        <div>
                            <p class="my-0"><i class="fa-solid fa-bed mr-3"></i>{{ $room->bed }} </p>
                            <p class="my-0"><i class="fa-solid fa-user mr-3"></i>{{ request()->input('tamu') . ' Tamu' }}</p>
                        </div>
                        <div>
                            <p class="font-bold my-0 mt-3">Fasilitas</p>
                            <p class="my-0"><i class="fa-solid fa-wifi mr-3"></i>Wi-Fi</p>
                            <p class="my-0"><i class="fa-solid fa-bowl-food mr-3"></i> {{ $room->breakfast}}</p>
                        </div>
                        <div>
                            <p class="font-bold my-0 mt-3">Harga Kamar</p>
                            <div class="flex justify-between">
                                <p>1 kamar/malam</p>
                                <p>:</p>
                                <p>Rp{{ number_format($room->room_price, 0, '.', '.') }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-slate-300 h-[1px] my-3 w-[95%] mx-auto"></div>
                <div class="mx-3 flex justify-between cursor-pointer" onclick="toggleDetails(1)">
                    <p class="font-bold text-[1.2rem]">Total</p>
                    <p class="text-prim font-bold text-[1.2rem]">Rp{{ number_format($room->room_price, 0, '.', '.') }}<i
                            class="hover:bg-blue-100 transition rounded-2xl self-center translate-y-[0.15em] p-2 text-black fa-solid fa-angle-down duration-300"></i>
                    </p>
                </div>
            </div>

    </div>
    </div>
</div>

    <a href="{{ url('/transaction-choice/' . $hotel->id . '/' . $room->id) . '?' . http_build_query(array_merge(request()->query(), ['username' => request()->input('username')])) }}" class="block w-[95%] shadow mx-auto mt-4 no-underline">
        <div id="paymentButton" class="rounded bg-sky-700 mx-auto w-full py-3 hover:bg-sky-600 active:bg-sky-800 text-center">
            <p class="text-[1.5rem] my-auto font-semibold text-white">Lanjut ke Pembayaran</p>
        </div>
    </a>
</div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Retrieve values from localStorage and set input fields
        const username = localStorage.getItem('username');
        if (username) document.getElementById('username').value = username;

        const telp = localStorage.getItem('telp');
        if (telp) document.getElementById('telp').value = telp;

        const email = localStorage.getItem('email');
        if (email) document.getElementById('email').value = email;

        const req = localStorage.getItem('req');
        if (req) document.getElementById('req').value = req;

        // Add event listeners to save values to localStorage
        document.getElementById('username').addEventListener('input', function() {
            localStorage.setItem('username', this.value);
        });

        document.getElementById('telp').addEventListener('input', function() {
            localStorage.setItem('telp', this.value);
        });

        document.getElementById('email').addEventListener('input', function() {
            localStorage.setItem('email', this.value);
        });

        document.getElementById('req').addEventListener('input', function() {
            localStorage.setItem('req', this.value);
        });
    });

    function toggleDetails(id) {
        var details = document.getElementById('details' + id);
        if (details.style.display === 'none') {
            details.style.display = 'block';
        } else {
            details.style.display = 'none';
        }
    }
</script>
@endsection
