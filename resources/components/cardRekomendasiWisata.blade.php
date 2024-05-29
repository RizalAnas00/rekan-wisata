@props(['name', 'rating', 'category', 'address', 'image'])

<div class="bg-white rounded-lg shadow-lg overflow-hidden">
    <div class="bg-gray-200 h-40 flex items-center justify-center">
        <img src="{{ $image }}" alt="Gambar {{ $name }}" class="object-cover h-full w-full">
    </div>
    <div class="p-4 bg-yellow-100">
        <h3 class="text-lg font-bold">{{ $name }} <span class="text-gray-600 text-sm">{{ $rating }}/5.0</span></h3>
        <p class="text-sm text-gray-600">{{ $category }}</p>
        <p class="text-sm text-gray-600">{{ $address }}</p>
    </div>
</div>
