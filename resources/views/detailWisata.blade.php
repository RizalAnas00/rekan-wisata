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
            <p class="text-lg md:text-2xl lg:text-3xl xl:text-4xl text-gray-600 pb-3 font-semi-bold">{{ $wisata->kategori_wisata }}</p>
            <p class="text-lg md:text-2xl lg:text-3xl xl:text-4xl text-gray-600">{{ $wisata->alamat_lengkap }}</p>
            <div class="overflow-x-auto">
                <div class="text-sm md:text-base lg:text-base xl:text-lg flex gap-4 mt-4 pt-4 text-center">
                    <a target="_blank" href="#" class="w-5/12 inline-block px-3 py-2 bg-[#283618] text-white rounded-2xl hover:bg-[#465f2a] flex-shrink-0">Lokasi</a>
                    <a href="{{ route('create.review') }}" class="w-5/12 inline-block px-3 py-2 bg-[#283618] text-white rounded-2xl hover:bg-[#465f2a] flex-shrink-0">Rating</a>
                    <a href="#" class="w-5/12 inline-block px-3 py-2 bg-[#283618] text-white rounded-2xl hover:bg-[#465f2a] flex-shrink-0">Tour Guide</a>
                </div>
            </div>
            <div class="border shadow-[#3c4227] border-[#606C38] hover:shadow-inner-md-custom shadow-md rounded-2xl p-6 mt-7">
                <p class="text-base md:text-lg lg:text-lg xl:text-2xl text-gray-600">{{ $wisata->deskripsi_wisata }}</p>
            </div>
            <div class="flex w-full gap-7 pb-4">
                <h2 class="text-lg md:text-2xl lg:text-3xl xl:text-4xl font-bold mt-6">Rating Terkini</h2>
                <h2 class="text-lg md:text-2xl lg:text-3xl xl:text-4xl font-extralight mt-6">{{ number_format($ratingTerkini, 1) }}/5 </h2>
            </div>    
                <div class="overflow-x-auto">
                    <div class="flex mt-2 gap-6">
                        @if ($reviews)
                            @foreach ($reviews as $review)
                                <div class="w-64 h-32 text-wrap whitespace-nowrap overflow-y-auto flex-shrink-0 text-base md:text-lg lg:text-2xl xl:text-2xl bg-[#606C38] rounded-2xl p-4 mb-4">
                                    <p class="text-[#FEFAE0] font-semi-bold">{{ $review->kontent }}</p>
                                    <p class="text-[#FEFAE0] text-lg font-light">{{ $review->rating }} / 5</p>
                                    <p class="text-[#FEFAE0] font-normal pb-1">{{ $review->user->nama }}</p>
                                </div>
                            @endforeach
                        @else
                            <p class="text-base md:text-lg lg:text-lg xl:text-2xl text-gray-600">Belum ada ulasan untuk wisata ini.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
