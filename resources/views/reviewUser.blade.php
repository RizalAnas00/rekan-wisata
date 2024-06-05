<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Rating</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<div class="max-w-md mx-auto bg-white shadow-lg rounded-lg overflow-hidden mt-10 p-6">
    <button class="flex items-center text-black mb-4" onclick="history.back()">
        <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
        </svg>
        <span class="font-bold">Tambah Rating</span>
    </button>

    <form method="POST" action="{{ route('store.review') }}">
        @csrf
        <div class="mb-4">
            <label for="rating" class="block text-gray-700 font-semibold mb-2">Masukkan Rating</label>
            <select id="rating" name="rating" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-opacity-50 focus:ring-green-600">
                @for ($i = 1; $i <= 5; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                @endfor
            </select>
        </div>

        <div class="mb-4">
            <label for="kontent" class="block text-gray-700 font-semibold mb-2">Kritik & Saran</label>
            <textarea id="kontent" name="kontent" rows="4" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-opacity-50 focus:ring-green-600" placeholder="masukkan kritik dan saran"></textarea>
        </div>

        <input type="hidden" name="wisata_id" value="{{ request('wisata_id') }}">

        <div class="text-center">
            <button type="submit" class="w-full bg-green-800 text-white py-2 rounded-full shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-600 focus:ring-opacity-50">
                Selesai
            </button>
        </div>
    </form>
</div>

</body>
</html>
