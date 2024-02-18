@extends('layouts.layout')

@section('content')
<div class="flex items-center justify-center h-screen">
    <form action="/profile/store" method="POST" class="w-4/12 bg-white shadow-md rounded-lg p-8">
        @csrf
        <p class="text-center text-xl font-bold pb-5">Tambahkan Data Karyawan Baru</p>
        <div class="mb-4">
            <label for="name" class="block text-gray-700 font-bold mb-2">Nama Karyawan:</label>
            <input type="text" name="name" id="name" placeholder="Fian" class="px-4 py-2 border rounded-lg w-full focus:outline-none focus:border-blue-500" required>
        </div>
        <div class="mb-4">
            <label for="date" class="block text-gray-700 font-bold mb-2">Tanggal Lahir:</label>
            <input type="date" name="date" id="date" value="{{ date('Y-m-d') }}" class="px-4 py-2 border rounded-lg w-full focus:outline-none focus:border-blue-500" required>
        </div>
        <div class="mb-4">
            <label for="role" class="block text-gray-700 font-bold mb-2">Jabatan:</label>
            <input type="text" name="role" id="role" placeholder="Manajer" class="px-4 py-2 border rounded-lg w-full focus:outline-none focus:border-blue-500" required>
        </div>
        <div class="mb-4">
            <label for="city" class="block text-gray-700 font-bold mb-2">Kota Asal:</label>
            <input type="text" name="city" id="city" placeholder="Surabaya" class="px-4 py-2 border rounded-lg w-full focus:outline-none focus:border-blue-500" required>
        </div>
        <button type="submit" name="submit" class="px-4 py-2 rounded-lg text-white bg-blue-500 hover:bg-blue-600 focus:outline-none">
            Simpan
        </button>
    </form>
</div>
@endsection
