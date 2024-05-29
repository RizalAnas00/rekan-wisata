<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rekan Wisata Sign Up - Data Diri</title>
  @vite('resources/css/app.css')
</head>
<body>
  <div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="px-8 py-10 bg-white rounded-lg shadow-md text-left w-full">
      <div class="flex justify-center pb-4 flex-col items-center">
        <img src="{{ asset('images/logo_2.png') }}" alt="Rekan Wisata Logo" class="w-39 h-39">
        <h1 class="text-2xl font-bold text-center">REKAN WISATA</h1>
      </div>
      <div class="container mx-auto my-4 px-2 py-8">
        <div class="max-w-md mx-auto shadow-sm rounded-xl overflow-hidden">
          <div class="p-4">
            <form method="POST" action="{{ route('register.step2') }}">
              @csrf
              <div class="mb-4">
                <label for="nama" class="text-sm text-gray-600 block mb-2">Nama</label>
                <input type="text" id="nama" name="nama" value="{{ old('nama') }}" class="bg-amber-50 text-gray-800 w-full px-2 py-2 rounded-2xl border border-2 border-lime-950 shadow-sm" required>
              </div>
              <div class="mb-4">
                <label for="tempat_lahir" class="text-sm text-gray-600 block mb-2">Tempat Lahir</label>
                <input type="text" id="tempat_lahir" name="tempat_lahir" value="{{ old('tempat_lahir') }}" class="bg-amber-50 text-gray-800 w-full px-2 py-2 rounded-2xl border border-2 border-lime-950 shadow-sm" required>
              </div>
              <div class="mb-4">
                <label for="tanggal_lahir" class="text-sm text-gray-600 block mb-2">Tanggal Lahir</label>
                <input type="date" id="tanggal_lahir" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" class="bg-amber-50 text-gray-800 w-full px-2 py-2 rounded-2xl border border-2 border-lime-950 shadow-sm" required>
              </div>
              <div class="mb-4">
                <label for="no_hp" class="text-sm text-gray-600 block mb-2">Nomor HP</label>
                <input type="text" id="no_hp" name="no_hp" value="{{ old('no_hp') }}" class="bg-amber-50 text-gray-800 w-full px-2 py-2 rounded-2xl border border-2 border-lime-950 shadow-sm" required>
              </div>
              <div class="mb-4">
                <label for="jenis_kelamin" class="text-sm text-gray-600 block mb-2">Jenis Kelamin</label>
                <select id="jenis_kelamin" name="jenis_kelamin" class="bg-amber-50 text-gray-800 w-full px-2 py-2 rounded-2xl border border-2 border-lime-950 shadow-sm" required>
                  <option value="Laki-laki">Laki-laki</option>
                  <option value="Perempuan">Perempuan</option>
                </select>
              </div>
              <div class="mb-4">
                <label for="pekerjaan" class="text-sm text-gray-600 block mb-2">Pekerjaan</label>
                <input type="text" id="pekerjaan" name="pekerjaan" value="{{ old('pekerjaan') }}" class="bg-amber-50 text-gray-800 w-full px-2 py-2 rounded-2xl border border-2 border-lime-950 shadow-sm" required>
              </div>
              <button type="submit" class="w-full rounded-2xl bg-lime-900 mt-4 px-2 py-3 text-center text-white font-medium shadow-sm focus:outline-none focus:ring focus:ring-lime-950 focus:ring-opacity-100">Selesai</button>
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
