<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $berita->judul }}</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

<div class="max-w-screen-xl max-h-full mx-auto bg-white shadow-lg rounded-2xl rounded-t-none overflow-hidden">
    <div class="relative">
        <img class="w-full h-56 object-cover rounded-2xl rounded-t-none" src="{{ asset($berita->image_path) }}" alt="{{ $berita->judul }}">
        <button class="absolute top-0 left-0 m-4 text-white bg-[#283618] bg-opacity-0 rounded-full p-2 hover:bg-opacity-60 focus:outline-none" onclick="window.history.back()">
           <img src="{{ asset('images/backterang.svg') }}" alt="Logo" class="w-4 h-4 hover:size-5">
        </button>
    </div>
    <div class="p-6">
        <h2 class="text-2xl lg:text-4xl font-bold text-[#283618]">{{ $berita->judul }}</h2>
        <div class="flex py-4">
            <p class="text-[#283618] text-base font-semibold mb-4">{{ $berita->penulis }} </p>
            <p class="text-[#283618] text-base mb-4 ml-6 font-sans font-extralight "> {{ $berita->tanggal_terbit }}</p>
        </div>
        <p class="text-[#283618] leading-relaxed">
            {{ $berita->kontent }}
        </p>
    </div>
</div>
</div>

</body>
</html>
