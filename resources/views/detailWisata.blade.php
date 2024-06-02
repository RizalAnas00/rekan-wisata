<!-- resources/views/detailWisata.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $wisata->nama_wisata }} - Detail Wisata</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <div class="max-w-md mx-auto mt-10 p-6 bg-white rounded-lg shadow-lg">
        <img src="{{ $wisata->image_path }}" alt="{{ $wisata->nama_wisata }}" class="rounded-lg">
        <div class="mt-4">
            <h1 class="text-2xl font-bold">{{ $wisata->nama_wisata }}</h1>
            <p class="text-gray-600">{{ $wisata->kategori_wisata }}</p>
            <p class="text-gray-600">{{ $wisata->alamat_lengkap }}</p>
            <div class="flex mt-4 space-x-4">
                <button class="flex items-center px-3 py-2 bg-green-500 text-white rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 19.071A2.828 2.828 0 017.95 21.9h8.1a2.828 2.828 0 012.829-2.829V7.95A2.828 2.828 0 0116.05 5.121H7.95A2.828 2.828 0 015.121 7.95v11.121zM12 13a3 3 0 100-6 3 3 0 000 6zm-1 6h2"/>
                    </svg>
                    <span class="ml-2">Add to Wishlist</span>
                </button>
                <button class="flex items-center px-3 py-2 bg-blue-500 text-white rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h4l3 9h7a3 3 0 100-6H9l-1.5-5H3m0 0L3 4a2 2 0 012-2h16a2 2 0 012 2v16a2 2 0 01-2 2H5a2 2 0 01-2-2z"/>
                    </svg>
                    <span class="ml-2">Book Now</span>
                </button>
            </div>
            <p class="mt-4 text-gray-600">{{ $wisata->deskripsi_wisata }}</p>
        </div>
    </div>
</body>
</html>
