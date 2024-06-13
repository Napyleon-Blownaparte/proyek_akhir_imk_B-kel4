@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8">
    <h1 class="text-3xl font-bold mb-8">Riwayat Pemesanan</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- Booking yang Sedang Berlangsung -->
        <div class="border border-gray-200 rounded-lg overflow-hidden shadow-lg">
            <div class="bg-gradient-to-r from-blue-500 to-blue-400 text-white px-6 py-4">
                <h2 class="text-xl font-bold mb-2">Pemesanan Sedang Berlangsung</h2>
                <!-- Informasi Pemesanan -->
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-lg font-semibold">Hotel Petra Surabaya</p>
                        <p class="text-sm text-gray-100">Check-in: 30 Mei 2024</p>
                        <p class="text-sm text-gray-100">Check-out: 2 Juni 2024</p>
                    </div>
                    <p class="text-lg font-semibold">Total: Rp250.000</p>
                </div>
            </div>
            <!-- Detail Pemesanan -->
            <div class="p-4 bg-white">
                <h3 class="text-lg font-semibold mb-2">Detail Pemesanan</h3>
                <div class="flex justify-between mb-2">
                    <p class="text-sm text-gray-600">Jenis Kamar:</p>
                    <p class="text-sm">Deluxe Room</p>
                </div>
                <div class="flex justify-between mb-2">
                    <p class="text-sm text-gray-600">Tipe Tempat Tidur:</p>
                    <p class="text-sm">King Bed</p>
                </div>
                <div class="flex justify-between mb-2">
                    <p class="text-sm text-gray-600">Jumlah Tamu:</p>
                    <p class="text-sm">2 Tamu (1 Dewasa, 1 Anak)</p>
                </div>
                <!-- Tombol untuk Melihat Detail Pemesanan -->
                <a href="#" class="block text-center bg-blue-500 text-white font-semibold py-2 px-4 rounded hover:bg-blue-600 transition duration-300">Lihat Detail</a>
            </div>
        </div>

        <!-- Riwayat Pemesanan Sebelumnya -->
        <div class="border border-gray-200 rounded-lg overflow-hidden shadow-lg">
            <div class="bg-gray-200 px-6 py-4">
                <h2 class="text-xl font-bold mb-2">Riwayat Pemesanan Sebelumnya</h2>
            </div>
            <!-- Daftar Riwayat Pemesanan -->
            <ul>
                <!-- Item Riwayat Pemesanan -->
                <li class="border-b border-gray-200">
                    <div class="p-4 flex items-center justify-between">
                        <div>
                            <p class="text-lg font-semibold">Hotel XYZ</p>
                            <p class="text-sm text-gray-600">Check-in: 15 Mei 2024</p>
                            <p class="text-sm text-gray-600">Check-out: 20 Mei 2024</p>
                        </div>
                        <p class="text-lg font-semibold">Total: Rp300.000</p>
                    </div>
                </li>
                <!-- Item Pemesanan lainnya -->
                <!-- Tambahkan sesuai kebutuhan -->
            </ul>
            <!-- Tombol untuk Melihat Semua Riwayat -->
            <div class="bg-gray-100 px-6 py-4">
                <a href="#" class="block text-center text-blue-500 font-semibold hover:underline">Lihat Semua Riwayat</a>
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
@endsection
