<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Jadwal</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-4">

        <div class="bg-white p-6 rounded-lg shadow-lg">
            <a href="{{ route('jadwal') }}" class="" >
                <img src="{{ asset('images/back_black.png') }}" alt="Back Button" class="w-4 h-4">
                </a>
            <h2 class="text-3xl font-bold text-center text-[#606c38] mb-4 ">Edit Jadwal</h2>

            <form action="{{ route('jadwal.update', $jadwal->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label class="block text-gray-700 font-semibold mb-2" for="nama">Nama Jadwal:</label>
                    <input type="text" name="nama" id="nama" class="bg-amber-50 text-gray-800 w-full px-2 py-2 rounded-2xl border-2 border-lime-950 shadow-sm" value="{{ $jadwal->nama }}" required>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 font-semibold mb-2" for="wisata_id">Wisata:</label>
                    <select name="wisata_id" id="wisata_id" class="bg-amber-50 text-gray-800 w-full px-2 py-2 rounded-2xl border-2 border-lime-950 shadow-sm" required>
                        <option value="">Pilih Wisata</option>
                        @foreach($wisatas as $wisata)
                            <option value="{{ $wisata->id }}" @if($jadwal->wisata_id == $wisata->id) selected @endif>{{ $wisata->nama_wisata }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 font-semibold mb-2" for="tanggal_berangkat">Tanggal Berangkat:</label>
                    <input type="date" name="tanggal_berangkat" id="tanggal_berangkat" class="bg-amber-50 text-gray-800 w-full px-2 py-2 rounded-2xl border-2 border-lime-950 shadow-sm" value="{{ $jadwal->tanggal_berangkat }}" required>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 font-semibold mb-2" for="deskripsi">Deskripsi:</label>
                    <textarea name="deskripsi" id="deskripsi" rows="4" class="bg-amber-50 text-gray-800 w-full px-2 py-2 rounded-2xl border-2 border-lime-950 shadow-sm" required>{{ $jadwal->deskripsi }}</textarea>
                </div>

                <div class="flex justify-center">
                    <button type="submit" class="bg-[#909c38] hover:bg-[#7a832e] text-white font-semibold py-2 px-4 rounded">Update Jadwal</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
