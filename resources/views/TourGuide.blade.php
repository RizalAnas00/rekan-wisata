<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilih Tour Guidemu</title>
    @vite('resources/css/app.css')
    <style>
        .selected {
            outline: 2px solid #DDA15E;
        }
    </style>
</head>
<body class="bg-gray-100">
    <div class="max-w-2xl mx-auto p-4">
        <h1 class="text-xl font-bold mb-4">Pilih Tour Guidemu</h1>

        <div class="space-y-4">
            @foreach ($guides as $guide)
                <div class="bg-[#606C38] text-[white] rounded-lg p-4 flex justify-between items-center guide-card" data-id="{{ $guide->id }}">
                    <div>
                        <h2 class="text-lg text-[#DDA15E] font-semibold">{{ $guide->nama }}</h2>
                        <p>{{ $guide->jenis_kelamin }} | {{ \Carbon\Carbon::parse($guide->tanggal_lahir)->age }} Tahun | {{ $guide->bahasa }}</p>
                        <p>{{ $guide->kota_wisata }}</p>
                        <p>{{ $guide->wisatas->count() }} Wisata</p>
                        <p class="font-bold">Rp. {{ number_format($guide->harga, 0, ',', '.') }}</p>
                    </div>
                    <a href="{{ route('tourguide.show', $guide->id) }}" class="bg-orange-500 text-white px-4 py-2 rounded-lg">Lihat Detail</a>
                </div>
            @endforeach
        </div>

        <form method="POST" action="{{ route('sewa.store') }}" class="mt-4 bg-white p-6 rounded-lg shadow-md">
            @csrf
            <input type="hidden" name="tour_guide_id" id="tour_guide_id">
            <div class="mb-4">
                <label for="tanggal_keberangkatan" class="text-lg font-semibold text-[#606c38]">Tanggal Keberangkatan</label>
                <input type="date" id="tanggal_keberangkatan" name="tanggal_keberangkatan" class="mt-2 bg-amber-50 text-gray-800 w-full px-4 py-2 rounded-xl border border-lime-950 shadow-sm focus:outline-none focus:ring-2 focus:ring-[#606c38] focus:border-transparent" required>
            </div>
            <div class="mb-4">
                <span class="text-lg font-semibold text-[#606c38]">Metode Pembayaran</span>
                <div class="mt-2 space-y-2">
                    <label class="inline-flex items-center">
                        <input type="radio" class="form-radio text-[#606c38]" name="pembayaran" value="bca" required>
                        <span class="ml-2 text-gray-700">BCA</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="radio" class="form-radio text-[#606c38]" name="pembayaran" value="dana">
                        <span class="ml-2 text-gray-700">DANA</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="radio" class="form-radio text-[#606c38]" name="pembayaran" value="ovo">
                        <span class="ml-2 text-gray-700">OVO</span>
                    </label>
                </div>
            </div>
            <button type="submit" class="w-full rounded-2xl bg-[#606c38] px-4 py-3 text-center text-white font-medium shadow-sm hover:bg-[#4e5a2a] focus:outline-none focus:ring-2 focus:ring-[#4e5a2a] focus:ring-opacity-50">Pesan Sekarang</button>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const cards = document.querySelectorAll('.guide-card');
            cards.forEach(card => {
                card.addEventListener('click', function () {
                    cards.forEach(c => c.classList.remove('selected'));
                    card.classList.add('selected');
                    document.getElementById('tour_guide_id').value = card.dataset.id;
                });
            });
        });
    </script>
</body>
</html>
