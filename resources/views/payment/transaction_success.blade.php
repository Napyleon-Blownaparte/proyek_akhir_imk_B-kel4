@extends('layouts.app')

@section('content')
<script>
    document.addEventListener('DOMContentLoaded', function() {
    // Retrieve values from localStorage and set content
    const guestName = localStorage.getItem('username');
    if (guestName) document.getElementById('guestName').innerText = guestName;

    const guestPhone = localStorage.getItem('telp');
    if (guestPhone) document.getElementById('guestPhone').innerText = guestPhone;

    const guestEmail = localStorage.getItem('email');
    if (guestEmail) document.getElementById('guestEmail').innerText = guestEmail;

    const additionalRequest = localStorage.getItem('req');
    if (additionalRequest) document.getElementById('additionalRequest').innerText = additionalRequest;
});

</script>
<div class="container">
    <ol
        class=" flex p-6 justify-center items-center w-[60em] mx-auto text-sm font-medium text-center dark:text-gray-300 sm:text-base">
        <li
            class="flex md:w-full items-center after:content-[''] after:w-full after:h-1 after:border-b after:border-slate-300 after:border-1 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10 dark:after:border-slate-300">
            <span class="text-sky-700 flex items-center after:content-['/'] sm:after:hidden after:mx-2 after:text-white dark:after:text-white">
                <svg class="w-7 h-7 sm:w-8 sm:h-8 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                </svg>
                <span class="hidden sm:inline-flex sm:ms-2 text-black w-[8em]">Form Reservasi</span>
            </span>
        </li>


        <li
            class="flex md:w-full items-center after:content-[''] after:w-full after:h-1 after:border-b after:border-slate-300 after:border-1 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10 dark:after:border-slate-300">
            <span class="text-sky-700 flex items-center after:content-['/'] sm:after:hidden after:mx-2 after:text-white dark:after:text-white">
                <svg class="w-7 h-7 sm:w-8 sm:h-8 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                </svg>
                <span class="hidden sm:inline-flex sm:ms-2 text-black w-[8em]">Pembayaran</span>
            </span>
        </li>
        <li class="flex items-center">
            <i class="fa-brands fa-font-awesome text-white bg-sky-700 rounded-full p-[1em] text-[0.7rem]"></i>
            <span class="hidden sm:inline-flex sm:ms-2 text-black">Selesai</span>
        </li>
    </ol>
</div>
    <div class="container flex py-4 min-h-[120vh]">

        <div class="w-[62em] mr-[3em]">
            <h3 class="mb-4 mt-1 font-bold"><i class="fa-solid fa-circle-check mr-3 text-[2rem] text-green-600"></i>Terima Kasih. Transaksi Anda Berhasil.</h3>
            <h5 class="">Reservasi Anda telah berhasil dibuat. Silakan cek detail reservasi pada <a href={{ url('/history/') }}>halaman reservasi</a></h5>

            <div class="mt-5">
                <h4 class="font-bold">Order ID</h4>
                <div class="bg-slate-200 rounded p-3 flex justify-between">
                    <p class="my-0 font-extrabold text-[1.4rem]">1291 8927 52791</p>
                    <i class="fa-solid fa-copy text-[2rem] text-slate-600"></i>
                </div>
            </div>


            <div class="mt-5">
                <h4 class="font-bold">Detail Reservasi</h4>
                <div class="flex-grow">
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
                            <div class="bg-slate-400 h-[2px] my-3 w-[2%] translate-y-[0.3em]"></div>
                            <div>
                                <p class="font-bold my-0">Check-Out</p>
                                <p class="my-0">{{ request()->input('checkout') }}</p>
                            </div>
                        </div>
                        <div class="bg-slate-300 h-[1px] my-3 w-[95%] mx-auto"></div>
                        <div class="mt-4 mx-3" id="guestDetails">
                            <div class="row">
                                <div class="col-4"><h5>Nama Tamu </h5></div>
                                <div class="col-8"><p id="guestName">William Evan</p></div>
                            </div>
                            <div class="row">
                                <div class="col-4"><h5>Nomor Telepon </h5></div>
                                <div class="col-8"><span>+62</span><span id="guestPhone">87855262799</span><p></p></div>
                            </div>
                            <div class="row">
                                <div class="col-4"><h5>Email </h5></div>
                                <div class="col-8"><p id="guestEmail">williamevan320@gmail.com</p></div>
                            </div>
                            <div class="row">
                                <div class="col-4"><h5>Permintaan Tambahan </h5></div>
                                <div class="col-8"><p id="additionalRequest">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit nam, quos officiis hic velit sed aperiam labore doloribus deleniti at veritatis tempora ut laudantium sint veniam eveniet modi accusamus distinctio!</p></div>
                            </div>
                        </div>


                        <div class="m-3 p-3 rounded bg-gradient-to-br to-blue-100 from-sky-100 transition-all duration-300"
                    id="details2" style="display: none;">
                    <p class="font-bold my-0">{{ $room->name }}</p>
                    <div>
                        <div>
                            <p class="my-0"><i class="fa-solid fa-bed mr-3"></i>{{ $room->bed }}</p>
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
                <div class="mx-3 flex justify-between cursor-pointer" onclick="toggleDetails(2)">
                    <p class="font-bold text-[1.2rem]">Total</p>
                    <p class="text-prim font-bold text-[1.2rem]">Rp{{ number_format($room->room_price, 0, '.', '.') }}<i
                            class="hover:bg-blue-100 transition rounded-2xl self-center translate-y-[0.15em] p-2 text-black fa-solid fa-angle-down duration-300"></i>
                    </p>
                </div>
                    </div>


                </div>
            </div>
            <div class="mx-auto flex justify-center my-10">
                <a href="{{ url('/home') }}" class="block w-[98%] shadow-md bg-green-300">
                    <button id="paymentButton" class="rounded text-gray-950  border-3 group transition mx-auto w-full py-3 hover:bg-green-400 active:bg-green-200">
                        <p class="text-[1.5rem] my-auto font-semibold group-hover:border-b-sky-950 group-hover:border-b-3 mx-auto group-hover:font-bold">Kembali ke Menu Utama</p>
                    </button>

                </a>
            </div>
        </div>






        {{-- RINCIAN KAMAR --}}
        <div class="flex-grow">
            <h3 class="mb-4 mt-1 font-bold">Rincian Pesanan</h3>
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
                            <p class="my-0"><i class="fa-solid fa-bed mr-3"></i>{{ $room->bed }}</p>
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




    <script>
        function updateSelection(selectedId) {
            console.log('updateSelection called with selectedId:', selectedId); // Debugging statement

            // Reset all containers
            const containers = document.querySelectorAll('[id$="_container"]');
            containers.forEach(container => {
                container.classList.remove('border-sky-700', 'bg-blue-100');
                container.classList.add('border-transparent', 'bg-white');
            });

            // Add selected classes to the selected container
            const selectedContainer = document.getElementById(`${selectedId}_container`);
            if (selectedContainer) {
                selectedContainer.classList.remove('border-transparent', 'bg-white');
                selectedContainer.classList.add('border-sky-700', 'bg-blue-100');
            }

            // Update the button text using appendChild
            const paymentButton = document.getElementById('paymentButton');
            const paymentMethods = {
                va: 'Virtual Account',
                mandiri_va: 'Virtual Account',
                bca_va: 'Virtual Account',
                bri_va: 'Virtual Account',
                atm: 'ATM / Bank Lain'
            };

            console.log('Updating button text to:', `Bayar dengan ${paymentMethods[selectedId]}`); // Debugging statement

            // Clear the existing content of paymentButton
            paymentButton.innerHTML = '';

            // Create a new paragraph element
            const paymentText = document.createElement('p');
            paymentText.classList.add('text-[1.5rem]', 'my-auto', 'font-semibold');
            paymentText.innerText = `Bayar dengan ${paymentMethods[selectedId]}`;

            // Append the new paragraph to paymentButton
            paymentButton.appendChild(paymentText);
        }

        function toggleDetails(id) {
            var details = document.getElementById('details' + id);
            if (details.style.display === 'none') {
                details.style.display = 'block';
            } else {
                details.style.display = 'none';
            }
        }

        document.addEventListener('DOMContentLoaded', (event) => {
            console.log('DOM fully loaded and parsed');
            // Optionally, you could call updateSelection here with a default value
        });
    </script>
@endsection
