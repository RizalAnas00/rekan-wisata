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

            const form = document.getElementById('filterForm');

            wilayahSelect.addEventListener('change', function() {
                form.submit();
            });

            kategoriSelect.addEventListener('change', function() {
                form.submit();
            });
        });
    </script>
</head>
<body class="bg-white">

    <div class="container mx-auto px-4 py-8">
        <header class="mb-6">
            <h1 class="text-2xl font-bold">Rekomendasi Wisata</h1>
        </header>
        
        <form id="filterForm" method="GET" action="{{ route('rekomendasi.Wisata') }}" class="mb-6 flex justify-between items-center">

            <div>
                <label for="wilayah" class="block mb-4 text-sm font-medium text-gray-700">Wilayah Wisata</label>
                <select id="wilayah" name="wilayah" class="block w-full p-2 border border-gray-300 rounded-md">
                    <option value="all">Semua Wilayah</option>
                    @foreach($wilayahs as $wilayah)
                        <option value="{{ $wilayah->kota }}" {{ request('wilayah') == $wilayah->kota ? 'selected' : '' }}>{{ $wilayah->kota }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label for="kategori" class="block mb-4 text-sm font-medium text-gray-700">Kategori Wisata</label>
                <select id="kategori" name="kategori" class="block w-full p-2 border border-gray-300 rounded-md">
                    <option value="all">Semua Kategori</option>
                    @foreach($kategoris as $kategori)
                        <option value="{{ $kategori->kategori_wisata }}" {{ request('kategori') == $kategori->kategori_wisata ? 'selected' : '' }}>{{ $kategori->kategori_wisata }}</option>
                    @endforeach
                </select>
            </div>

        </form>

        <div class="grid grid-cols-2 gap-4">

            @foreach($wisatas as $wisata)
                <a href="{{ route('detail.Wisata', $wisata->id) }}" class="w-90 h-72 text-wrap whitespace-nowrap overflow-y-auto flex-shrink-0 bg-amber-50 border rounded-md shadow-md mr-4">
                    
                    @if ($wisata->image_path)
                        <img src="{{ $wisata->image_path }}" alt="{{ $wisata->nama_wisata }}" class="w-full h-32 object-cover rounded-md mb-2">
                    @endif

                    <div class="flex justify-between items-center px-4 mb-1">
                        <h3 class="pr-0.5 text-lg font-[750] text-emerald-950">{{ $wisata->nama_wisata }}</h3>
                        <h3 class="text-lg font-light text-lime-700">{{ $wisata->rating ?? '4.7' }}/5.0</h3>
                    </div>
                    <p class="px-4 font-bold text-sm text-green-900">{{ $wisata->kategori_wisata }}</p>
                    <p class="px-4 text-sm text-gray-600">{{ $wisata->alamat_lengkap }}</p>
                    <p class="pb-1 px-4 mt-1 mb-2 text-xs">{{ $wisata->deskripsi_wisata }}</p>
                </a>
            @endforeach
            
        </div>
    </div>
</body>
</html>
