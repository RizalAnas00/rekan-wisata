<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rekan Wisata Sign Up</title>
  @vite('resources/css/app.css')
</head>
<body>
  <div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="px-8 py-10 bg-white rounded-lg shadow-md text-left w-full">
        <a href="{{ route('login') }}" class="" >
            <img src="{{ asset('images/back_black.png') }}" alt="Back Button" class="w-4 h-4">
            </a>
      <div class="flex justify-center pb-4 flex-col items-center">
        <img src="{{ asset('images/logo_2.png') }}" alt="Rekan Wisata Logo" class="w-39 h-39">
        <h1 class="text-2xl font-bold text-center">REKAN WISATA</h1>
      </div>
      <div class="container mx-auto my-4 px-2 py-8">
        <div class="max-w-md mx-auto shadow-sm rounded-xl overflow-hidden">
          <div class="p-4">
            <form method="POST" action="{{ route('register.step1') }}">
              @csrf
              <div class="mb-4">
                <label for="email" class="text-sm text-gray-600 block mb-2">Email Address</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" class="bg-amber-50 text-gray-800 w-full px-2 py-2 rounded-2xl border border-2 border-lime-950 shadow-sm" required>
              </div>
              <div class="mb-4">
                <label for="password" class="text-sm text-gray-600 block mb-2">Password</label>
                <input type="password" id="password" name="password" class="bg-amber-50 text-gray-800 w-full px-2 py-2 rounded-2xl border border-2 border-lime-950 shadow-sm" required>
              </div>
              <div class="mb-4">
                <label for="password_confirmation" class="text-sm text-gray-600 block mb-2">Confirm Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="bg-amber-50 text-gray-800 w-full px-2 py-2 mb-10 rounded-2xl border border-2 border-lime-950 shadow-sm" required>
              </div>
              <button type="submit" class="w-full rounded-2xl bg-lime-900 mt-4 px-2 py-3 text-center text-white font-medium shadow-sm focus:outline-none focus:ring focus:ring-lime-950 focus:ring-opacity-100">Selanjutnya</button>
            </form>
            @if ($errors->any())
              <div class="mt-4 text-red-600">
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
