<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <div class="flex flex-col min-h-screen">
        <header class="bg-green-900 text-white py-4">
            <div class="container mx-auto px-4 flex items-center justify-between">
                <h1 class="text-2xl"></h1>
                <input
                    type="text"
                    class="block p-2 border border-gray-300 rounded-md text-black"
                    placeholder="Pariwisata, Semarang, Jenis Wisata"
                />
                <button class="bg-green-700 text-white px-4 py-2 rounded-md ml-4">Search</button>
            </div>
        </header>

        <main class="flex-1 container mx-auto px-4 py-8">
            <div class="mb-6">
                <label for="wilayah" class="block mb-2 text-sm font-medium text-gray-700">Wilayah Wisata</label>
                <input
                    type="text"
                    id="wilayah"
                    class="block w-full p-2 border border-gray-300 rounded-md"
                    placeholder="Semarang"
                />
            </div>

            <section class="mb-6">
                <h2 class="text-xl font-semibold mb-2">Rekomendasi Pariwisata</h2>
                <div class="overflow-x-auto border rounded-md shadow-md">
                    <div class="flex p-4">
                        @foreach($wisatas as $wisata)
                            <div class="w-72 flex-shrink-0 bg-white border rounded-md p-4 shadow-md mr-4">
                                @if ($wisata->image_path)
                                    <img src="{{ $wisata->image_path }}" alt="{{ $wisata->nama_wisata }}" class="w-full h-32 object-cover rounded-md mb-4">
                                @endif
                                <h3 class="text-lg font-semibold">{{ $wisata->nama_wisata }}</h3>
                                <p class="text-sm text-gray-600">{{ $wisata->alamat_lengkap }}</p>
                                <p class="mt-2">{{ $wisata->deskripsi_wisata }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
            
            

            <section class="mb-6">
                <h2 class="text-xl font-semibold mb-2">Pilihan Pariwisata</h2>
                <div class="flex flex-wrap gap-2">
                    @foreach($wisatas->unique('kategori_wisata') as $wisata)
                        <button class="px-4 py-2 bg-green-600 text-white rounded-md">{{ $wisata->kategori_wisata }}</button>
                    @endforeach
                </div>
            </section>

            <section>
                <h2 class="text-xl font-semibold mb-2">Berita Pariwisata</h2>
                <div class="grid grid-cols-1 gap-4">
                    @foreach($beritas as $berita)
                        <div class="bg-white border rounded-md p-4 shadow-md">
                            <h3 class="text-lg font-semibold">{{ $berita->judul }}</h3>
                            <p class="text-sm text-gray-600">By {{ $berita->penulis }} on {{ $berita->tanggal_terbit }}</p>
                            <p class="mt-2">{{ $berita->kontent }}</p>
                        </div>
                    @endforeach
                </div>
            </section>
        </main>
    </div>
</body>
</html>
