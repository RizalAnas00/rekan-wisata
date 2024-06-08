<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilih Tour Guidemu</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <div class="max-w-2xl mx-auto p-4">
        <h1 class="text-xl font-bold mb-4">Pilih Tour Guidemu</h1>

        <div class="space-y-4">
            @foreach ($guides as $guide)
                <div class="bg-[#606C38] text-[white] rounded-lg p-4 flex justify-between items-center">
                    <div>
                        <h2 class="text-lg text-[#DDA15E] font-semibold">{{ $guide['name'] }}</h2>
                        <p>{{ $guide['gender'] }} | {{ $guide['age'] }} Tahun | {{ $guide['languages'] }}</p>
                        <p>{{ $guide['location'] }}</p>
                        <p>{{ $guide['tours'] }} Wisata</p>
                        <p class="font-bold">Rp. {{ number_format($guide['price'], 0, ',', '.') }}</p>
                    </div>
                    <button class="bg-orange-500 text-white px-4 py-2 rounded-lg">Lihat Detail</button>
                </div>
            @endforeach
        </div>

        <div class="mt-4">
            <button class="w-full rounded-2xl bg-lime-950 mb-4 px-2 py-3 text-center text-white font-medium shadow-sm focus:outline-none focus:ring focus:ring-lime-950 focus:ring-opacity-100">Lanjut</button>
        </div>
    </div>
</body>
</html>
