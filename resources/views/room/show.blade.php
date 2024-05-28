@extends('layouts.app')

@section('content')
<div class="bg-sky-400 py-5">
    <ol class="flex p-6 justify-center items-center w-full text-sm font-medium text-center text-gray-300 dark:text-gray-300 sm:text-base">
        <li class="flex md:w-full items-center text-white dark:text-white sm:after:content-[''] after:w-full after:h-1 after:border-b after:border-white after:border-1 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10 dark:after:border-white">
            <span class="flex items-center after:content-['/'] sm:after:hidden after:mx-2 after:text-white dark:after:text-white">
                <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                </svg>
                <span class="hidden sm:inline-flex sm:ms-2">Pesan</span>
            </span>
        </li>
        <li class="flex md:w-full items-center after:content-[''] after:w-full after:h-1 after:border-b after:border-white after:border-1 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10 dark:after:border-white">
            <span class="flex items-center after:content-['/'] sm:after:hidden after:mx-2 after:text-white dark:after:text-white">
                <span class="me-2">2</span>
                <span class="hidden sm:inline-flex sm:ms-2">Pembayaran</span>
            </span>
        </li>
        <li class="flex items-center">
            <span class="me-2">3</span>
            Done
        </li>
    </ol>

    <div class="px-3 py-0.5 pt-3.5 mx-5 bg-white rounded-xl shadow-lg">
      <div class="flex">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5m-1.5 3h1.5m-1.5 3h1.5m3-6H15m-1.5 3H15m-1.5 3H15M9 21v-3.375c0-.621.504-1.125 1.125-1.125h3.75c.621 0 1.125.504 1.125 1.125V21" />
        </svg>
        <p class="px-1 font-bold">The Square Siwalankerto</p>
      </div>

      <div class="flex pt-2">
        <div class="p-1 text-sm">
          Check-in:
        </div>
        <div class="p-1 px-3.5 text-sm">
          Sab, 25 Mei 2024 (14.00)
        </div>
      </div>

      <div class="flex">
        <div class="p-1 text-sm">
          Check-out:
        </div>
        <div class="p-1 text-sm">
          Min, 26 Mei 2024 (12.00)
        </div>
      </div>

      <div class="border-t border-gray-300 -mx-3 my-3">
        <p class="mx-4 text-xs pt-2">(1x) Deluxe Queen Room</p>
        <p class="text-gray-500 text-xs mx-5 pt-1">1 Queen Bed</p>
        <p class="text-gray-500 text-xs mx-5 pt-1">2 Tamu/Kamar</p>

      </div>
    </div>
  </div>

  <div class="bg-gray-50 p-8 rounded-lg shadow-xl">
    <p class="text-2xl font-bold text-gray-900 mb-6">Data Pemesan</p>

    <div class="p-6 bg-white rounded-lg shadow-md">
      <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
        <div>
          <label for="username" class="block text-sm font-medium text-gray-700 mb-2">Username</label>
          <input type="text" name="username" id="username" autocomplete="username" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm p-3 transition duration-300 ease-in-out hover:shadow-lg" placeholder="Masukkan username">
        </div>

        <div>
          <label for="telp" class="block text-sm font-medium text-gray-700 mb-2">No Handphone</label>
          <input type="tel" name="telp" id="telp" autocomplete="telp" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm p-3 transition duration-300 ease-in-out hover:shadow-lg" placeholder="Masukkan no handphone">
        </div>

        <div class="sm:col-span-2">
          <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
          <input type="email" name="email" id="email" autocomplete="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm p-3 transition duration-300 ease-in-out hover:shadow-lg" placeholder="Masukkan email">
        </div>
      </div>
    </div>

    <p class="mt-8 text-2xl font-bold text-gray-900 mb-6">Permintaan Khusus</p>

    <div class="p-6 bg-white rounded-lg shadow-md">
      <label for="req" class="block text-sm font-medium text-gray-700 mb-2">List Permintaan Khusus</label>
      <textarea id="req" name="req" rows="4" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm p-3 transition duration-300 ease-in-out hover:shadow-lg" placeholder="Contoh: Kamar Bebas Asap Rokok, Lantai Atas, 1 Ranjang Besar"></textarea>
      <p class="mt-2 text-xs text-gray-500">Permintaan khusus tergantung pada ketersediaan di hotel.</p>
    </div>

    <p class="mt-8 text-2xl font-bold text-gray-900 mb-6">Rincian Harga</p>

    <div class="max-w-xl">
      <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        <div class="p-4 cursor-pointer flex justify-between items-center border-b border-gray-200" onclick="toggleDetails(1)">
          <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 mr-2 text-sky-500">
              <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
            </svg>
            <h3 class="text-lg font-semibold">Harga Total</h3>
          </div>
          <p class="text-gray-600 font-bold">Rp. 550.000</p>
        </div>
        <div class="p-4 bg-gray-100" id="details1" style="display: none;">
          <div class="bg-gray-200 p-3 rounded-lg mb-2">
            <div class="flex justify-between">
              <p class="text-gray-700">(1x) The Square Siwalankerto <br> Deluxe Queen Room</p>
              <p class="text-gray-700">Rp. 500.000</p>
            </div>
            <div class="flex justify-between">
              <p class="text-gray-700">PPN (10%)</p>
              <p class="text-gray-700">Rp. 50.000</p>
            </div>
            <div class="flex justify-between">
              <p class="text-gray-700">Biaya Lain-Lain</p>
              <p class="text-gray-700">Rp. 0</p>
            </div>
          </div>
        </div>
        </div>
      </div>
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
