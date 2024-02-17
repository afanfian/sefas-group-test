@extends('layouts.layout')

@section('content')
<div class="flex justify-center pt-5">
    <div class="space-y-2">
        <button class="flex justify-end items-end text-right font-bold py-2 px-4 rounded bg-blue-500 hover:bg-blue-700 text-white">
            <a href="/profile/create">Tambah User<i class="fas fa-plus pl-2"></i></a>
        </button>
        <p class="font-bold text-lg text-center">Tabel Profile Karyawan Sefas Group</p>
        <table class="table-auto rounded-md">
            <thead class="border bg-blue-300">
            <tr class="border">
                <th class="px-2 border text-center">No</th>
                <th class="p-4 border">Nama Karyawan</th>
                <th class="p-4 border">Tanggal Lahir</th>
                <th class="p-4 border">Jabatan</th>
                <th class="p-4 border">Kota Asal</th>
                <th class="p-4 border">Aksi</th>
            </tr>
            </thead>
            <tbody class="border bg-gray-50">
            @php
                $counter = 1;
            @endphp
            @foreach ($profiles as $item)
                <tr class="border">
                    <td class="px-2 text-center border">{{ $counter++ }}</td>
                    <td class="p-4 border">{{$item->name}}</td>
                    <td class="p-4 border">{{$item->date}}</td>
                    <td class="p-4 border">{{$item->role}}</td>
                    <td class="p-4 border">{{$item->city}}</td>
                    <td class="p-4 border">
                        <a href="/profile/{{ $item->id }}/edit" class="text-blue-500"><i class="fas fa-edit"></i></a>
                        <form action="/profile/{{ $item->id }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500"><i class="fas fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection