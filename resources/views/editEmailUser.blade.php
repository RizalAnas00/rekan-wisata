<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Email</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-800">

    <div class="container mx-auto p-4 md:p-8">
        <div class="bg-white p-6 md:p-10 rounded-lg shadow-lg">
            <a href="{{ route('profile.show') }}" class="" >
                <img src="{{ asset('images/back_black.png') }}" alt="Back Button" class="w-4 h-4">
            </a>
            <h2 class="text-3xl font-bold text-center text-[#606c38] mb-6">Edit Email</h2>

            @if ($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-6" role="alert">
                    <strong class="font-bold">Whoops!</strong>
                    <span class="block sm:inline">There were some problems with your input.</span>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('profile.updateEmail') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700 font-semibold mb-2" for="email">New Email:</label>
                    <input type="email" name="email" id="email" class="bg-amber-50 text-gray-800 w-full px-2 py-2 rounded-2xl border-2 border-lime-950 shadow-sm" value="{{ old('email') }}" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-semibold mb-2" for="password">Current Password:</label>
                    <input type="password" name="password" id="password" class="bg-amber-50 text-gray-800 w-full px-2 py-2 rounded-2xl border-2 border-lime-950 shadow-sm" required>
                </div>
                <div class="flex justify-center">
                    <button type="submit" class="bg-[#606c38] hover:bg-[#4e5a2d] text-white font-semibold py-2 px-4 rounded">
                        Update Email
                    </button>
                </div>
            </form>

        </div>
    </div>

</body>
</html>
