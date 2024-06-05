<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-800">

    <div class="container mx-auto p-4 md:p-8">
        <div class="bg-white p-6 md:p-10 rounded-lg shadow-lg">
            <a href="{{ route('dashboard') }}" class="" >
                <img src="images/back_black.png" alt="Back Button" class="w-4 h-4">
            </a>
            <h2 class="text-xl font-bold text-center text-[#606c38] mb-2">Profil Pengguna</h2>
            <h3 class="font-serif text-2xl lg:text-4xl text-center font-semi-bold  text-[#404924] mb-1">Halo, {{ $user->nama }}</h3>
            <p class="text-center text-gray-500 mb-6">Wisatawan</p>

            <div class="grid grid-cols-1 md:grid-cols-1 gap-6 mb-6">

                <div class="bg-gray-100 p-4 rounded border-l-4 border-[#606c38]">
                    <label class="block text-gray-700 font-semibold">Alamat Email:</label>
                    <p class="mt-1 text-[#606c38]">{{ $user->email }}</p>
                </div>
                <div class="bg-gray-100 p-4 rounded border-l-4 border-[#606c38]">
                    <label class="block text-gray-700 font-semibold">No.Telp:</label>
                    <p class="mt-1 text-[#606c38]">{{ $user->no_hp }}</p>
                </div>
                <div class="bg-gray-100 p-4 rounded border-l-4 border-[#606c38]">
                    <label class="block text-gray-700 font-semibold">Pekerjaan:</label>
                    <p class="mt-1 text-[#606c38]">{{ $user->pekerjaan }}</p>
                </div>
            </div>

            <div class="flex justify-center text-center space-x-4">
                <a href="{{ route('profile.editEmail') }}" class="bg-[#606c38] hover:bg-[#4e5a2d] text-white font-semibold py-2 px-4 rounded-md">
                    Ganti Email
                </a>
                <a href="{{ route('profile.editPhone') }}" class="bg-[#606c38] hover:bg-[#4e5a2d] text-white font-semibold py-2 px-4 rounded-md">
                    Ganti Nomor HP
                </a>
            </div>
        </div>
    </div>

</body>
</html>
