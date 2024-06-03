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
        <img src="{{ asset($wisata->image_path) }}" alt="{{ $wisata->nama_wisata }}" class="w-full h-auto rounded-lg">
        <div class="mt-4">
            <h1 class="text-2xl font-bold">{{ $wisata->nama_wisata }}</h1>
            <p class="text-gray-600">{{ $wisata->kategori_wisata }}</p>
            <p class="text-gray-600">{{ $wisata->alamat_lengkap }}</p>
            <div class="flex flex-wrap mt-4 space-x-2">
                <button class="flex items-center px-3 py-2 bg-green-500 text-white rounded hover:bg-green-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 19.071A2.828 2.828 0 017.95 21.9h8.1a2.828 2.828 0 012.829-2.829V7.95A2.828 2.828 0 0116.05 5.121H7.95A2.828 2.828 0 015.121 7.95v11.121zM12 13a3 3 0 100-6 3 3 0 000 6zm-1 6h2"/>
                    </svg>
                    <span class="ml-2">Add to Wishlist</span>
                </button>
                <button class="flex items-center px-3 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h4l3 9h7a3 3 0 100-6H9l-1.5-5H3m0 0L3 4a2 2 0 012-2h16a2 2 0 012 2v16a2 2 0 01-2 2H5a2 2 0 01-2-2z"/>
                    </svg>
                    <span class="ml-2">Book Now</span>
                </button>
                <a target="_blank" class="flex items-center px-3 py-2 bg-yellow-500 text-white rounded hover:bg-yellow-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2a10 10 0 00-10 10c0 5.25 10 15 10 15s10-9.75 10-15a10 10 0 00-10-10zm0 13a3 3 0 110-6 3 3 0 010 6z"/>
                    </svg>
                    <span class="ml-2">Lokasi</span>
                </a>
                <a class="flex items-center px-3 py-2 bg-purple-500 text-white rounded hover:bg-purple-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l2.357 7.268a1 1 0 00.95.69h7.631c.969 0 1.372 1.24.588 1.81l-6.175 4.486a1 1 0 00-.364 1.118l2.357 7.268c.3.921-.755 1.688-1.538 1.118l-6.175-4.486a1 1 0 00-1.176 0l-6.175 4.486c-.783.57-1.838-.197-1.538-1.118l2.357-7.268a1 1 0 00-.364-1.118L2.16 12.695c-.784-.57-.38-1.81.588-1.81h7.631a1 1 0 00.95-.69l2.357-7.268z"/>
                    </svg>
                    <span class="ml-2">Rating</span>
                </a>
                <a class="flex items-center px-3 py-2 bg-red-500 text-white rounded hover:bg-red-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2m16 0H4m16 0H4m8-14a4 4 0 110-8 4 4 0 010 8z"/>
                    </svg>
                    <span class="ml-2">Tour Guide</span>
                </a>
            </div>
            <p class="mt-4 text-gray-600">{{ $wisata->deskripsi_wisata }}</p>
        </div>
    </div>
    <div class="max-w-md mx-auto mt-6 p-6 bg-white rounded-lg shadow-lg">
        <h2 class="text-xl font-bold">Rating</h2>
        <div class="mt-4">
            <!-- Contoh card rating, sesuaikan dengan data yang tersedia -->
            @foreach ($reviews as $review)
                <div class="border p-4 rounded-lg mb-4">
                    <div class="flex items-center">
                        <div class="text-yellow-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l2.357 7.268a1 1 0 00.95.69h7.631c.969 0 1.372 1.24.588 1.81l-6.175 4.486a1 1 0 00-.364 1.118l2.357 7.268c.3.921-.755 1.688-1.538 1.118l-6.175-4.486a1 1 0 00-1.176 0l-6.175 4.486c-.783.57-1.838-.197-1.538-1.118l2.357-7.268a1 1 0 00-.364-1.118L2.16 12.695c-.784-.57-.38-1.81.588-1.81h7.631a1 1 0 00.95-.69l2.357-7.268z"/>
                            </svg>
                        </div>
                        <div class="ml-2">
                            <p class="text-gray-700 font-bold">{{ $review->pengunjung->nama }}</p>
                            <p class="text-gray-500 text-sm">{{ $review->rating }}/5</p>
                        </div>
                    </div>
                    <p class="mt-2 text-gray-600">{{ $review->comment }}</p>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
