@extends('layouts.app')

@section('content')
    <div class="w-[80em] mx-auto">
        <div class="my-5">
            <h1>Rincian Kamar</h1>
            <div class="flex mt-3 gap-3 mb-2">
                <div class=" w-[24.5em] bg-slate-300 h-52">
                </div>
                <div class="flex-grow ">
                    <div class="flex h-52 pb-4 mb-3 px-4 border-slate-300 border shadow-md">
                        <div class="flex-grow my-4">
                            <h1 class="font-bold text-[1.5rem] mb-4">Kamar Hahaha</h1>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <h1>Pilih Metode Pembayaran</h1>
            <div class="p-4 cursor-pointer flex justify-between items-center border-b border-gray-200"
                onclick="toggleDetails(1)">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="h-6 w-6 mr-2 text-sky-500">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                    </svg>
                    <h3 class="text-lg font-semibold">Virtual Account</h3>
                </div>
            </div>
            <div class="p-4 bg-gray-100" id="details1" style="display: none;">
                
            </div>
        </div>
        <script>
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
