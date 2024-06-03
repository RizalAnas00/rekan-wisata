<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $wisata->nama_wisata }} - Detail Wisata</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-white">
    <div class="max-w-screen-2xl mx-auto bg-white rounded-lg shadow-2xl pb-14">
        <img src="{{ asset($wisata->image_path) }}" alt="{{ $wisata->nama_wisata }}" class="w-full object-cover rounded-t-none rounded-2xl">
        <div class="mt-4 px-6">
            <h1 class="text-2xl md:text-4xl lg:text-6xl xl:text-8xl font-bold">{{ $wisata->nama_wisata }}</h1>
            <p class="text-lg md:text-2xl lg:text-3xl:text-4xl text-gray-600 pb-3 font-semi-bold">{{ $wisata->kategori_wisata }}</p>
            <p class="text-lg md:text-2xl lg:text-3xl xl:text-4xl text-gray-600">{{ $wisata->alamat_lengkap }}</p>
            <div class="overflow-x-auto">
                <div class="text-sm md:text-base lg:text-base xl:text-lg flex gap-4 mt-4 text-center ">
                    <a target="_blank" href="#" class="w-5/12 inline-block px-3 py-2 bg-[#283618] text-white rounded-2xl hover:bg-[#465f2a] flex-shrink-0">Lokasi</a>
                    <a href="#" class="w-5/12  inline-block px-3 py-2 bg-[#283618] text-white rounded-2xl hover:bg-[#465f2a] flex-shrink-0">Rating</a>
                    <a href="#" class="w-5/12  inline-block px-3 py-2 bg-[#283618] text-white rounded-2xl hover:bg-[#465f2a] flex-shrink-0">Tour Guide</a>
                </div>
            </div>
            <p class="py-10 text-base md:text-lg lg:text-lg xl:text-2xl text-gray-600">{{ $wisata->deskripsi_wisata }}</p>
            
            <h2 class="text-lg md:text-2xl lg:text-3xl xl:text-4xl font-bold mt-6">Review</h2>
            <div class="mt-4">
                @if ($reviews)
                    @foreach ($reviews as $review)
                        <div class="text-lg md:text-2xl lg:text-3xl xl:text-4xl border border-gray-300 rounded-lg p-4 mb-4">
                            <p class="text-gray-800">{{ $review->kontent }}</p>
                            <p class="text-gray-600">Rating: {{ $review->rating }}/5</p>
                            <p class="text-gray-600">User: {{ $review->user->nama }}</p>
                        </div>
                    @endforeach
                @else
                    <p class="text-base md:text-lg lg:text-lg xl:text-2xl text-gray-600">Belum ada ulasan untuk wisata ini.</p>
                @endif
            </div>
        </div>
    </div>
</body>
</html>
