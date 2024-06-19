<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jadwal Liburan</title>
  @vite('resources/css/app.css')
</head>
<body>
  <div class="container mx-auto p-4 md:p-8">
    <div class="bg-white p-6 md:p-10 rounded-lg shadow-lg">
        <div class="flex items-center mb-8">
            <a href="{{ route('dashboard') }}" class="" >
            <img src="images/back_black.png" alt="Back Button" class="w-4 h-4">
            </a>
            <h1 class="text-xl font-semibold text-gray-700 ml-4">Jadwal Liburan</h1>
        </div>
        <div class="pb-10 text-center">
            <a href="{{ route('jadwal.create') }}">
                <button class="rounded-lg bg-[#909c38] px-8 py-3 text-white font-medium shadow-md focus:outline-none focus:ring-2 focus:ring-[#909c38] focus:ring-opacity-100 hover:bg-[#7a832e] hover:shadow-lg transition duration-300">Tambah jadwal</button>
            </a>
        </div>
        <div>
            <h1 class=" text-xl font-semibold text-gray-700">Daftar Jadwal</h1>
        </div>

        @foreach ( $jadwals as $jadwal )
            <div class="relative bg-lime-900 rounded-lg p-6 w-full md:w-80 my-5 whitespace-normal">

                    <h2 class="text-orange-200 text-xl font-bold mb-2">{{ $jadwal->nama }}</h2>
                    <p class="text-white font-bold mb-1">{{ $jadwal->wisata->nama_wisata }}</p>
                    <p class="text-white ">{{ $jadwal->tanggal_berangkat }}</p>
                    <p class="text-white mb-10">{{ $jadwal->deskripsi }}</p>
                    <a href="{{ route('jadwal.edit',$jadwal->id) }}">
                        <button class="absolute bottom-4 right-4 bg-[#BC6C25] text-white font-semibold py-2 px-4 rounded-lg">Edit Jadwal</button>
                    </a>

            </div>
        @endforeach



    </div>
  </div>
</body>
</html>
