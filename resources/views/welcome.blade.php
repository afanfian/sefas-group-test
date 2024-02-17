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
        <button id="btnTambahUser" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Tambah User
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
{{-- Modal --}}
<div id="modalTambahUser" class="fixed z-10 inset-0 overflow-y-auto hidden">
    <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity" aria-hidden="true">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <div class="sm:flex sm:items-start">
                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                        <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                            Tambah User
                        </h3>
                        <div class="mt-2">
                            <div class="mb-4">
                                <label for="namaKaryawan" class="block text-sm font-medium text-gray-700">Nama Karyawan</label>
                                <input type="text" id="namaKaryawan" name="namaKaryawan" class="mt-1 p-2 border border-gray-300 rounded-md w-full">
                            </div>
                            <div class="mb-4">
                                <label for="tanggalLahir" class="block text-sm font-medium text-gray-700">Tanggal Lahir</label>
                                <input type="date" id="tanggalLahir" name="tanggalLahir" class="mt-1 p-2 border border-gray-300 rounded-md w-full">
                            </div>
                            <div class="mb-4">
                                <label for="jabatan" class="block text-sm font-medium text-gray-700">Jabatan</label>
                                <input type="text" id="jabatan" name="jabatan" class="mt-1 p-2 border border-gray-300 rounded-md w-full">
                            </div>
                            <div class="mb-4">
                                <label for="kotaAsal" class="block text-sm font-medium text-gray-700">Kota Asal</label>
                                <input type="text" id="kotaAsal" name="kotaAsal" class="mt-1 p-2 border border-gray-300 rounded-md w-full">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                <button id="btnSubmit" type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-600 text-base font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:ml-3 sm:w-auto sm:text-sm">
                    Submit
                </button>
                <button id="btnCancel" type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                    Cancel
                </button>
            </div>
        </div>
    </div>
</div>
{{-- Script --}}
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const modalTambahUser = document.getElementById('modalTambahUser');
        const btnTambahUser = document.getElementById('btnTambahUser');
        const btnCancel = document.getElementById('btnCancel');
        const btnSubmit = document.getElementById('btnSubmit');

        btnTambahUser.addEventListener('click', function () {
            modalTambahUser.classList.remove('hidden');
        });

        btnCancel.addEventListener('click', function () {
            modalTambahUser.classList.add('hidden');
        });

        btnSubmit.addEventListener('click', function () {
            const namaKaryawan = document.getElementById('namaKaryawan').value;
            const tanggalLahir = document.getElementById('tanggalLahir').value;
            const jabatan = document.getElementById('jabatan').value;
            const kotaAsal = document.getElementById('kotaAsal').value;

            fetch('/store', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({
                    namaKaryawan: namaKaryawan,
                    tanggalLahir: tanggalLahir,
                    jabatan: jabatan,
                    kotaAsal: kotaAsal
                })
            })
                .then(response => response.json())
                .then(data => {
                    console.log(data);
                    modalTambahUser.classList.add('hidden');
                    location.reload(); 
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        });
    });
</script>
</body>
</html>
