<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Tour Guide</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-800">

    <div class="container mx-auto p-4 md:p-8">
        <div class="bg-white p-6 md:p-10 rounded-lg shadow-lg">
            <a href="{{ url()->previous() }}" class="">
                <img src="{{ asset('images/back_black.png') }}" alt="Back Button" class="w-4 h-4">
            </a>
            <h2 class="text-xl font-bold text-center text-[#606c38] mb-2">Profil Tour Guide</h2>
            <h3 class="font-serif text-2xl lg:text-4xl text-center font-semi-bold text-[#404924] mb-1">{{ $guide->nama }}</h3>
            <p class="text-center text-gray-500 mb-6">{{ $guide->jenis_kelamin }}</p>

            <div class="grid grid-cols-1 md:grid-cols-1 gap-6 mb-6">
                <div class="bg-gray-100 p-4 rounded border-l-4 border-[#606c38]">
                    <label class="block text-gray-700 font-semibold">Wisata yang dibimbing:</label>
                    <ul class="list-disc list-inside">
                        @foreach ($guide->wisatas as $wisata)
                            <li class="text-[#606c38]">{{ $wisata->nama_wisata }}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="bg-gray-100 p-4 rounded border-l-4 border-[#606c38]">
                    <label class="block text-gray-700 font-semibold">Bahasa:</label>
                    <p class="mt-1 text-[#606c38]">{{ $guide->bahasa }}</p>
                </div>
                <div class="bg-gray-100 p-4 rounded border-l-4 border-[#606c38]">
                    <label class="block text-gray-700 font-semibold">Umur:</label>
                    <p class="mt-1 text-[#606c38]">{{ \Carbon\Carbon::parse($guide->tanggal_lahir)->age }} Tahun</p>
                </div>
                <div class="bg-gray-100 p-4 rounded border-l-4 border-[#606c38]">
                    <label class="block text-gray-700 font-semibold">Harga:</label>
                    <p class="mt-1 text-[#606c38]">Rp. {{ number_format($guide->harga, 0, ',', '.') }}</p>
                </div>
                <div class="bg-gray-100 p-4 rounded border-l-4 border-[#606c38]">
                    <label class="block text-gray-700 font-semibold">Email:</label>
                    <p class="mt-1 text-[#606c38]">{{ $guide->email }}</p>
                </div>
                <div class="bg-gray-100 p-4 rounded border-l-4 border-[#606c38]">
                    <label class="block text-gray-700 font-semibold">Kota Wisata:</label>
                    <p class="mt-1 text-[#606c38]">{{ $guide->kota_wisata }}</p>
                </div>


            </div>



            <div class="flex justify-center text-center space-x-4">
                <a href="{{ url()->previous() }}" class="bg-[#606c38] hover:bg-[#4e5a2d] text-white font-semibold py-2 px-4 rounded-md">
                    Kembali
                </a>
            </div>
        </div>
    </div>

</body>
</html>
