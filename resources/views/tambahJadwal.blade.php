<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah jadwal</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="flex items-center justify-center min-h-screen bg-gray-100 p-4">
        <div class="px-8 py-10 bg-white rounded-lg shadow-md text-left w-full max-w-2xl">
            <div class="flex items-center mb-8">
                <a href="{{ url('/jadwal') }}" class="">
                <img src="images/back_black.png" alt="Back Button" class="w-4 h-4">
                </a>
                <h1 class="text-xl font-semibold text-gray-700 ml-4">Tambah Jadwal</h1>
            </div>

            <form method="POST" action="{{ route('TambahJadwal') }}">
                @csrf
                <div class="mb-4">
                  <label for="nama" class="text-sm text-gray-600 block mb-2">Nama Jadwal atau Acara</label>
                  <input type="text" id="nama" name="nama" class="bg-amber-50 text-gray-800 w-full px-2 py-2 rounded-2xl border border-2 border-lime-950 shadow-sm" >
                </div>
                <div class="mb-4">
                    <label for="kota" class="text-sm text-gray-600 block mb-2">Kota Wisata</label>
                    <select id="kota" name="kota" class="bg-amber-50 text-gray-800 w-full px-2 py-2 rounded-2xl border border-2 border-lime-950 shadow-sm"  required>
                        <option value="">-- Pilih Kota--</option>
                        <option value="Surabaya">Surabaya</option>
                        <option value="Jakarta">Jakarta</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="wisata" class="text-sm text-gray-600 block mb-2">Wisata Tujuan</label>
                    <select id="wisata" name="wisata" class="bg-amber-50 text-gray-800 w-full px-2 py-2 rounded-2xl border border-2 border-lime-950 shadow-sm" required>
                        <option value="">-- Pilih Kota--</option>
                        <option value="Surabaya">Wisata Air Terjun Black Canyon</option>
                        <option value="Jakarta">Museum Ambarita</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="tanggal_berangkat" class="text-sm text-gray-600 block mb-2">Tanggal Lahir</label>
                    <input type="date" id="tanggal_berangkat" name="tanggal_berangkat" value="" class="bg-amber-50 text-gray-800 w-full px-2 py-2 rounded-2xl border border-2 border-lime-950 shadow-sm" required>
                </div>
                <div class="mb-10">
                    <label for="deskripsi" class="text-sm text-gray-600 block mb-2">Deskripsi Jadwal atau acara</label>
                    <input type="text" id="deskripsi" name="deskripsi" class="bg-amber-50 text-gray-800 w-full px-2 py-2 rounded-2xl border border-2 border-lime-950 shadow-sm" >
                </div>


                <button type="submit" class="w-full rounded-2xl bg-lime-950 mb-4 px-2 py-3 text-center text-white font-medium shadow-sm focus:outline-none focus:ring focus:ring-lime-950 focus:ring-opacity-100">Simpan</button>
              </form>

              @if ($errors->any())
                <div>
                  <ul>
                    @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
              @endif






        </div>
      </div>




</body>
</html>
