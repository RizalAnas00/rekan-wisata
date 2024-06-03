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
        <header class="bg-[#283618] text-white p-4 flex justify-between items-center">
            <div class="flex items-center">
                <button src="{{ asset('images/sidebarbtn.png') }}" alt="Sidebar" class="block pr-2"></button>
                <img src="{{ asset('images/notifIcon.png') }}" alt="Notification" class="p-2 block">
            </div>
            <form method="GET" action="{{ route('search.wisata') }}" class="flex-grow ml-4">
                <input
                    type="text"
                    name="search"
                    class="p-2 border border-gray-300 rounded-md text-black w-full"
                    placeholder="Pariwisata, Semarang, Jenis Wisata"
                    value="{{ request('search') }}"
                />
            </form>
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
                <a href="{{ route('rekomendasi.Wisata') }}" class="text-xl font-semibold mb-2 hover:underline">Rekomendasi Pariwisata > </a>
                <div class="overflow-x-auto">
                    <div class="flex p-4 gap-2">
                        @foreach($wisatas as $wisata)
                            <a href="{{ route('detail.Wisata', $wisata->id) }}" class="w-52 h-72 text-wrap whitespace-nowrap overflow-y-auto flex-shrink-0 bg-amber-50 border rounded-md shadow-md mr-4">
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
            </section>            
    
            
            <section class="mb-6">
                <h2 class="text-xl font-semibold mb-2">Pilihan Pariwisata</h2>
                <div class="flex-wrap grid-row-2 gap-2 py-3">
                    @foreach($wisatas->unique('kategori_wisata') as $wisata)
                        <button class="px-4 py-2 bg-[#283618] text-white rounded-md m-1.5">{{ $wisata->kategori_wisata }}</button>
                    @endforeach
                </div>
            </section>


            <section>
                <h2 class="text-xl font-semibold mb-2">Berita Pariwisata</h2>
                <div class="overflow-x-auto">
                    <div class="flex p-4 gap-2">
                        @foreach($beritas as $berita)
                            <div class="w-72 h-60 text-wrap overflow-hidden flex-shrink-0 bg-amber-50 border rounded-md shadow-md mr-4">
                                @if ($berita->image_path)
                                    <img src="{{ $berita->image_path }}" alt="{{ $berita->nama_wisata }}" class="w-full h-32 object-cover rounded-md mb-2">
                                @endif
                                <div class="p-4">
                                    <h3 class="text-lg font-semibold">{{ $berita->judul }}</h3>
                                    <p class="text-sm text-gray-600">By {{ $berita->penulis }} on {{ $berita->tanggal_terbit }}</p>
                                    <p class="text-wrap mt-2 mb-2">{{ $berita->kontent }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        </main>
    </div>
</body>
</html>