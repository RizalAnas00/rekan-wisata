<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice Sewa Tour Guide</title>
    @vite('resources/css/app.css')
    <style>
        .accent-color {
            background-color: #606c38;
        }
    </style>
</head>
<body class="bg-gray-100">
    <div class="max-w-2xl mx-auto p-4">
        <h1 class="text-2xl font-bold mb-6 text-center text-[#606c38]">Invoice Sewa Tour Guide</h1>
        <div class="bg-white rounded-lg p-6 shadow-lg">
            <h2 class="text-xl font-semibold mb-4 text-[#606c38]">Detail Pemesanan</h2>
            <div class="space-y-2">
                <p><strong class="text-[#606c38]">Nama Tour Guide:</strong> {{ $sewa->tourGuide->nama }}</p>
                <div>
                    <strong class="text-[#606c38]">Nama Wisata:</strong>
                    <ul class="list-disc list-inside pl-4">
                        @foreach ($wisatas as $wisata)
                            <li> - {{ $wisata->nama_wisata }}</li>
                        @endforeach
                    </ul>
                </div>
                <p><strong class="text-[#606c38]">Jadwal:</strong> {{ $sewa->tanggal_keberangkatan }}</p>
                <p><strong class="text-[#606c38]">Harga:</strong> Rp. {{ number_format($sewa->tourGuide->harga, 0, ',', '.') }}</p>
                <p><strong class="text-[#606c38]">Metode Pembayaran:</strong> {{ strtoupper($sewa->pembayaran) }}</p>
            </div>
            <div class="mt-6 text-center">
                <a href="{{ route('dashboard') }}" class="inline-block bg-[#606c38] text-white px-6 py-2 rounded-lg shadow hover:bg-[#4e5a2a] focus:outline-none focus:ring-2 focus:ring-[#4e5a2a] focus:ring-opacity-50">Ke Dashboard</a>
            </div>
        </div>
    </div>
</body>
</html>
