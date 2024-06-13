@extends('layouts.app')

@section('content')
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
                <span
                    class="flex items-center after:content-['/'] sm:after:hidden after:mx-2 after:text-white dark:after:text-white">
                    <span class="me-2 text-white rounded-full bg-sky-700 py-1 px-[0.7em]">2</span>
                    <span class="hidden sm:inline-flex sm:ms-2 text-black">Pembayaran</span>
                </span>
            </li>
            <li class="flex items-center">
                <span class="me-2 text-black rounded-full bg-white border-sky-700 border-3 py-1 px-[0.7em]">3</span>
                <span class="hidden sm:inline-flex sm:ms-2 text-black">Selesai</span>
            </li>
        </ol>
    </div>
    <div class="container flex py-4 h-[50em]">

        <div class="w-[62em] mr-[3em]">
            <h3 class="mb-4 mt-1 font-bold">Pilih Metode Pembayaran</h3>
            <div class="rounded-xl shadow-md p-3 px-3">
                <div class="">
                    <div class="">
                        <input class="mr-3 w-[1.5em] h-[1.5em]" type="radio" id="va" name="payment" value="va"
                            onclick="updateSelection('va')">
                        <label for="va">
                            <p class="text-[1.7rem] font-bold my-0">Virtual Account<i
                                    class="hover:bg-blue-100 transition rounded-2xl self-center translate-y-[0.15em] p-2 text-black fa-solid fa-angle-down duration-300 active:bg-slate-500 cursor-pointer"
                                    onclick="toggleDetails(2)"></i></p>
                        </label>
                    </div>

                    <div id="details2" style="display:none">
                        <div id="mandiri_va_container" class="flex ml-8 p-2 my-1 rounded-xl border-2 border-transparent">
                            <input class="my-auto mr-3 w-[1.5em] h-[1.5em]" type="radio" id="mandiri_va" name="payment"
                                value="mandiri_va" onclick="updateSelection('mandiri_va')">
                            <label for="mandiri_va">
                                <p class="text-[1.4rem] my-0">Mandiri Virtual Account</p>
                            </label>
                        </div>
                        <div id="bca_va_container" class="flex ml-8 p-2 my-1 rounded-xl border-2 border-transparent">
                            <input class="mr-3 my-auto w-[1.5em] h-[1.5em]" type="radio" id="bca_va" name="payment"
                                value="bca_va" onclick="updateSelection('bca_va')">
                            <label for="bca_va">
                                <p class="text-[1.4rem] my-0">BCA Virtual Account</p>
                            </label>
                        </div>
                        <div id="bri_va_container" class="flex ml-8 p-2 my-1 rounded-xl border-2 border-transparent">
                            <input class="mr-3 my-auto w-[1.5em] h-[1.5em]" type="radio" id="bri_va" name="payment"
                                value="bri_va" onclick="updateSelection('bri_va')">
                            <label for="bri_va">
                                <p class="text-[1.4rem] my-0">BRI Virtual Account</p>
                            </label>
                        </div>
                    </div>

                    <div class="my-3 mt-4">
                        <input class="mr-3 w-[1.5em] h-[1.5em]" type="radio" id="atm" name="payment" value="atm"
                            onclick="updateSelection('atm')">
                        <label for="atm">
                            <p class="text-[1.7rem] font-bold my-0">ATM / Bank Lain</p>
                        </label>
                    </div>
                </div>
            </div>


            <div class="rounded-xl shadow-md p-3 px-3">
                <div class="mx-3 flex justify-between cursor-pointer ">
                    <p class="font-bold my-auto text-[1.5rem]">Total</p>
                    <p class="text-prim font-extrabold text-[1.5rem] my-auto">Rp{{ number_format($room->room_price, 0, '.', '.') }}</p>
                </div>
            </div>
            <div class="mx-auto flex justify-center my-3">
                <a href="{{ url('/transaction-explanation/' . $hotel->id . '/' . $room->id) . '?' . http_build_query(array_merge(request()->query(), ['username' => request()->input('username')])) }}" class="block w-[98%] shadow mx-auto mt-4 no-underline text-white">
                    <div id="paymentButton" class="rounded bg-sky-700 mx-auto w-full py-3 hover:bg-sky-600 active:bg-sky-800 text-center">
                        <p class="text-[1.5rem] my-auto font-semibold text-white">Bayar dengan Virtual Account</p>
                    </div>
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
