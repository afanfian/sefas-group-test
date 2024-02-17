<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    @vite('resources/css/app.css')
</head>
<body class="antialiased bg-gray-100">
    <div class="flex items-center justify-center h-screen">
        <form action="/profile/{{ $profile->id }}" method="POST" class="w-4/12 bg-white shadow-md rounded-lg p-8">
            @method('PUT')
            @csrf
            <p class="text-center text-xl font-bold pb-5">Edit Data Karyawan</p>
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-bold mb-2">Nama Karyawan:</label>
                <input type="text" name="name" id="name" placeholder="Fian" value="{{ $profile->name }}" class="px-4 py-2 border rounded-lg w-full focus:outline-none focus:border-blue-500">
            </div>
            <div class="mb-4">
                <label for="date" class="block text-gray-700 font-bold mb-2">Tanggal Lahir:</label>
                <input type="date" name="date" id="date" value="{{ $profile->date }}" class="px-4 py-2 border rounded-lg w-full focus:outline-none focus:border-blue-500">
            </div>
            <div class="mb-4">
                <label for="role" class="block text-gray-700 font-bold mb-2">Jabatan:</label>
                <input type="text" name="role" id="role" placeholder="Manajer" value="{{ $profile->role }}" class="px-4 py-2 border rounded-lg w-full focus:outline-none focus:border-blue-500">
            </div>
            <div class="mb-4">
                <label for="city" class="block text-gray-700 font-bold mb-2">Kota Asal:</label>
                <input type="text" name="city" id="city" placeholder="Surabaya" value="{{ $profile->city }}" class="px-4 py-2 border rounded-lg w-full focus:outline-none focus:border-blue-500">
            </div>
            <button type="submit" name="submit" class="px-4 py-2 rounded-lg text-white bg-blue-500 hover:bg-blue-600 focus:outline-none">
                Save
            </button>
        </form>
    </div>
</body>
</html>
