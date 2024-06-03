<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekomendasi Wisata</title>
    @vite('resources/css/app.css')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const wilayahSelect = document.getElementById('wilayah');
            const kategoriSelect = document.getElementById('kategori');
            const searchInput = document.getElementById('search');

            const form = document.getElementById('filterForm');

            wilayahSelect.addEventListener('change', function() {
                form.submit();
            });

            kategoriSelect.addEventListener('change', function() {
                form.submit();
            });

            searchInput.addEventListener('keyup', function(event) {
                if (event.key === 'Enter') {
                    form.submit();
                }
            });
        });
    </script>
</head>
<body class="bg-white">

    <div class="container mx-auto px-4 py-8">
        <header class="mb-6">
            <h1 class="text-2xl font-bold">Rekomendasi Wisata</h1>
        </header>
        
        <form id="filterForm" method="GET" action="{{ route('search.wisata') }}" class="mb-6">
            <div class="mb-4">
                <label for="search" class="block mb-2 text-sm font-medium text-gray-700">Cari Wisata</label>
                <input
                    type="text"
                    id="search"
                    name="search"
                    class="block w-full p-2 border border-gray-300 rounded-md"
                    placeholder="Search by name, city, or category"
                    value="{{ request('search') }}"
                />
            </div>
            <div class="flex space-x-4">
                <div>
                    <label for="wilayah" class="block mb-2 text-sm font-medium text-gray-700">Wilayah Wisata</label>
                    <select id="wilayah" name="wilayah" class="block w-full p-2 border border-gray-300 rounded-md">
                        <option value="all">Semua Wilayah</option>
                        @foreach($wilayahs as $wilayah)
                            <option value="{{ $wilayah->kota }}" {{ request('wilayah') == $wilayah->kota ? 'selected' : '' }}>{{ $wilayah->kota }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="kategori" class="block mb-2 text-sm font-medium text-gray-700">Kategori Wisata</label>
                    <select id="kategori" name="kategori" class="block w-full p-2 border border-gray-300 rounded-md">
                        <option value="all">Semua Kategori</option>
                        @foreach($kategoris as $kategori)
                            <option value="{{ $kategori->kategori_wisata }}" {{ request('kategori') == $kategori->kategori_wisata ? 'selected' : '' }}>{{ $kategori->kategori_wisata }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </form>

        <div class="grid grid-cols-2 gap-4">
            @foreach($wisatas as $wisata)
                <a href="{{ route('detail.Wisata', $wisata->id) }}" class="bg-amber-50 rounded-lg shadow-md overflow-hidden">
                    @if ($wisata->image_path)
                        <img src="{{ $wisata->image_path }}" alt="{{ $wisata->nama_wisata }}" class="w-full h-32 object-cover">
                    @endif
                    <div class="p-4">
                        <h3 class="text-lg font-semibold">{{ $wisata->nama_wisata }}</h3>
                        <p class="text-gray-600">{{ $wisata->kategori_wisata }}</p>
                        <p class="text-gray-600">{{ $wisata->alamat_lengkap }}</p>
                        <p class="text-gray-600">{{ $wisata->rating ?? '3.5' }}/5.0</p>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</body>
</html>
