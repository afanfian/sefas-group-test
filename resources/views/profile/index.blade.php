<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    @vite('resources/css/app.css')
</head>
<body class="antialiased">
<div class="flex justify-center pt-5">
    <div class="space-y-2">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            <a href="/profile/create">Tambah User</a>
        </button>
        <p class="font-bold text-lg text-center">Tabel Profile Karyawan Sefas Group</p>
        <table class="table-fixed rounded-md">
            <thead class="border bg-blue-300">
            <tr class="border">
                <th class="px-2 border text-center">No</th>
                <th class="p-2 border">Nama Karyawan</th>
                <th class="p-2 border">Tanggal Lahir</th>
                <th class="p-2 border">Jabatan</th>
                <th class="p-2 border">Kota Asal</th>
            </tr>
            </thead>
            <tbody class="border bg-gray-50">
            @php
                $counter = 1;
            @endphp
            @foreach ($profiles as $item)
                <tr class="border">
                    <td class="px-2 text-center border">{{ $counter++ }}</td>
                    <td class="p-2 border">{{$item->name}}</td>
                    <td class="p-2 border">{{$item->date}}</td>
                    <td class="p-2 border">{{$item->role}}</td>
                    <td class="p-2 border">{{$item->city}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
