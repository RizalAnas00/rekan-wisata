<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History Pemesanan</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <div class="max-w-4xl mx-auto p-4">
        <h1 class="text-2xl font-bold mb-6 text-center text-[#606c38]">History Pemesanan</h1>

        <div class="space-y-4">
            @foreach ($sewas as $sewa)
                <div class="bg-white rounded-lg p-4 shadow-lg">
                    <h2 class="text-xl font-semibold mb-2 text-[#606c38]">{{ $sewa->tourGuide->nama }}</h2>
                    <p><strong class="text-[#606c38]">Nama Wisata:</strong>
                        <ul class="list-disc list-inside pl-4">
                            <li>{{ $sewa->wisata->nama_wisata }}</li>
                        </ul>
                    </p>
                    <p><strong class="text-[#606c38]">Tanggal Keberangkatan:</strong> {{ $sewa->tanggal_keberangkatan }}</p>
                    <p><strong class="text-[#606c38]">Harga:</strong> Rp. {{ number_format($sewa->tourGuide->harga, 0, ',', '.') }}</p>
                    <p><strong class="text-[#606c38]">Metode Pembayaran:</strong> {{ strtoupper($sewa->pembayaran) }}</p>
                    <a href="{{ route('sewanih', $sewa->id) }}" class="inline-block mt-4 bg-[#606c38] text-white px-4 py-2 rounded-lg shadow hover:bg-[#4e5a2a] focus:outline-none focus:ring-2 focus:ring-[#4e5a2a] focus:ring-opacity-50">Lihat Detail</a>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
