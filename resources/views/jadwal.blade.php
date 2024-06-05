<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jadwal Liburan</title>
  @vite('resources/css/app.css')
</head>
<body>
  <div class="flex items-center justify-center min-h-screen bg-gray-100 p-4">
    <div class="px-8 py-10 bg-white rounded-lg shadow-md text-left w-full max-w-2xl">
        <div class="flex items-center mb-8">
            <a href="{{ route('dashboard') }}" class="" >
            <img src="images/back_black.png" alt="Back Button" class="w-4 h-4">
            </a>
            <h1 class="text-xl font-semibold text-gray-700 ml-4">Jadwal Liburan</h1>
        </div>
        <div class="pb-10 text-center">
            <a href="{{ url('/tambahJadwal') }}">
                <button class="rounded-2xl bg-lime-900 px-10 py-3 text-white font-medium shadow-sm focus:outline-none focus:ring focus:ring-lime-900 focus:ring-opacity-100">Tambah jadwal</button>
            </a>

        </div>
        <div>
            <h1 class=" text-xl font-semibold text-gray-700">Daftar Jadwal</h1>
        </div>

        @foreach ( $jadwals as $jadwal )
            <div class="relative bg-lime-900 rounded-lg p-6 w-full md:w-80 my-5 whitespace-normal">

                    <h2 class="text-orange-200 text-xl font-bold mb-2">{{ $jadwal->nama }}</h2>
                    <p class="text-white font-bold mb-1">{{ $jadwal->wisata_id }}</p>
                    <p class="text-white ">{{ $jadwal->tanggal_berangkat }}</p>
                    <p class="text-white mb-10">{{ $jadwal->deskripsi }}</p>
                    <button class="absolute bottom-4 right-4 bg-yellow-500 text-white font-semibold py-2 px-4 rounded-lg">Edit Jadwal</button>
            </div>
        @endforeach



    </div>
  </div>
</body>
</html>
