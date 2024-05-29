<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rekan Wisata Login</title>
  @vite('resources/css/app.css')
</head>
<body>
  <div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="px-8 py-10 bg-white rounded-lg shadow-md text-left w-full">
        <div class="cols-2 gap-11">
            <a href="#">
                <img src="images/back_black.png" alt="Back Button" class="w-8 h-8">
            </a>
            <h1 class="text-xl font-semibold text-gray-700">Jadwal Liburan</h1>
        </div>
        <div class="container mx-auto px-2 py-8">
          <div class="max-w-md mx-auto shadow-sm rounded-xl overflow-hidden">
            <div class="p-4">
              <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-4">
                  <label for="email" class="text-sm text-gray-600 block mb-2">Email Address</label>
                  <input type="email" id="email" name="email" class="bg-amber-50 text-gray-800 w-full px-2 py-2 rounded-2xl border border-2 border-lime-950 shadow-sm">
                </div>
                <div class="mb-6"> <!-- Menambahkan margin-bottom lebih besar untuk jarak -->
                  <label for="password" class="text-sm text-gray-600 block mb-2">Password</label>
                  <input type="password" id="password" name="password" class="bg-amber-50 text-gray-800 w-full px-2 py-2 rounded-2xl border border-2 border-lime-950 shadow-sm">
                </div>
                <p class="text-left text-sm text-gray-600 mb-6"><a href="#" class="text-black hover:underline">Lupa Password?</a></p>
                <button type="submit" class="w-full rounded-2xl bg-lime-950 mb-4 px-2 py-3 text-center text-white font-medium shadow-sm focus:outline-none focus:ring focus:ring-lime-950 focus:ring-opacity-100">Masuk</button>
              </form>
              @if ($errors->any())
                <div>
                  <ul>
                    @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
              @endif

              @if (session('error'))
                <div>
                  <p>{{ session('error') }}</p>
                </div>
              @endif

              <p class="text-center text-gray-600 mb-2">Belum punya akun? Daftar disini</p>
              <form method="GET" action="{{ route('register.step1') }}"> <!-- Ganti method menjadi GET dan tambahkan action -->
                <button class="w-full rounded-2xl bg-lime-900 px-2 py-3 text-center text-white font-medium shadow-sm focus:outline-none focus:ring focus:ring-lime-900 focus:ring-opacity-100">Daftar</button>
              </form>
            </div>
          </div>
        </div>
    </div>
  </div>
</body>
</html>
