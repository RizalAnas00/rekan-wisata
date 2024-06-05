<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <div class="flex flex-col min-h-screen">
        <header class="bg-[#283618] text-white p-4 flex justify-between items-center">
            <div class="flex items-center">
                <a href="#" data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation" aria-controls="drawer-navigation">
                    <img src="{{ asset('images/sidebarlight.svg') }}" alt="Sidebar" class="w-full h-full">
                </a>
                <a href="">
                    <img src="{{ asset('images/notifIcon.png') }}" alt="Notification" class="p-2 block">
                </a>

            </div>
            <form method="GET" action="{{ route('search.wisata') }}" class="flex-grow ml-4">
                <input
                    type="text"
                    name="search"
                    class="p-2 border border-gray-300 rounded-md text-black w-full"
                    placeholder="Pariwisata, Semarang, Jenis Wisata"
                    value="{{ request('search') }}"
                />
            </form>
        </header>

        <!-- Overlay -->
    <div class="overlay" id="overlay"></div>

    <!-- Drawer component -->
    <div id="drawer-navigation" class="fixed top-0 left-0 z-40 w-64 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-white dark:bg-[#283618] dark:bg-opacity-80 dark:backdrop-blur-lg dark:backdrop-filter " tabindex="-1" aria-labelledby="drawer-navigation-label">
        <h5 id="drawer-navigation-label" class="text-base font-semibold text-gray-500 uppercase dark:text-gray-400">Menu</h5>
        <button type="button" data-drawer-hide="drawer-navigation" aria-controls="drawer-navigation" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center dark:hover:bg-[#58713d] dark:hover:text-white">
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            <span class="sr-only">Close menu</span>
        </button>
        <div class="py-4 overflow-y-auto">
            <ul class="space-y-2 font-medium">
                <li>
                    <a href="{{ route('pesanTg') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-[#58713d] group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                            <path d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z"/>
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Pemesanan TG</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('jadwal') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-[#58713d] group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 2 8v5H0v2h20v-2h-2V8a6.98 6.98 0 0 0-.582-2.837Z"/>
                            <path d="M12 18v-3H8v3a2 2 0 1 0 4 0Z"/>
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Jadwal Liburan</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('profile.show') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-[#58713d] group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                            <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Users</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('logout') }}"
                       class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-[#58713d] group"
                       onclick="confirmLogout()">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3"/>
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Log Out</span>
                    </a>
                </li>

            </ul>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </div>

    <script>
        function confirmLogout(){
            if (confirm('Apakah Anda yakin ingin keluar?')) {
                event.preventDefault();
                document.getElementById('logout-form').submit();
            }

        }
        document.addEventListener('DOMContentLoaded', function () {
            const toggleButton = document.querySelector('[data-drawer-show="drawer-navigation"]');
            const drawer = document.getElementById('drawer-navigation');
            const closeButton = drawer.querySelector('[data-drawer-hide="drawer-navigation"]');
            const overlay = document.getElementById('overlay');

            toggleButton.addEventListener('click', function () {
                drawer.classList.toggle('-translate-x-full');
                overlay.classList.add('active');
            });

            closeButton.addEventListener('click', function () {
                drawer.classList.add('-translate-x-full');
                overlay.classList.remove('active');
            });

            overlay.addEventListener('click', function () {
                drawer.classList.add('-translate-x-full');
                overlay.classList.remove('active');
            });
        });
    </script>

        <main class="flex-1 container mx-auto px-4 py-8">

            <div class="mb-6">
                <label for="wilayah" class="block mb-2 text-sm font-medium text-gray-700">Wilayah Wisata</label>
                <input
                    type="text"
                    id="wilayah"
                    class="block w-full p-2 border border-gray-300 rounded-md"
                    placeholder="Semarang"
                />
            </div>

            <section class="mb-6">
                <a href="{{ route('rekomendasi.Wisata') }}" class="text-xl font-semibold mb-2 hover:underline">Rekomendasi Pariwisata > </a>
                <div class="overflow-x-auto">
                    <div class="flex p-4 gap-2">
                        @foreach($wisatas as $wisata)
                            <a href="{{ route('detail.Wisata', $wisata->id) }}" class=" w-52 h-72 text-wrap whitespace-nowrap overflow-y-auto flex-shrink-0 bg-amber-50 border rounded-2xl shadow-md mr-4">
                                @if ($wisata->image_path)
                                    <img src="{{ $wisata->image_path }}" alt="{{ $wisata->nama_wisata }}" class="w-full h-32 object-cover rounded-md mb-2">
                                @endif
                                <div class="flex justify-between items-center px-4 mb-1">
                                    <h3 class="pr-0.5 text-lg font-[750] text-emerald-950">{{ $wisata->nama_wisata }}</h3>
                                    <h3 class="text-lg font-light text-lime-700">{{ $wisata->rating ?? '4.7' }}/5.0</h3>
                                </div>
                                <p class="px-4 font-bold text-sm text-green-900">{{ $wisata->kategori_wisata }}</p>
                                <p class="px-4 text-sm text-gray-600">{{ $wisata->alamat_lengkap }}</p>
                                <p class="pb-1 px-4 mt-1 mb-2 text-xs">{{ $wisata->deskripsi_wisata }}</p>
                            </a>
                        @endforeach
                    </div>
                </div>
            </section>


            <section class="mb-6">
                <h2 class="text-xl font-semibold mb-2">Pilihan Pariwisata</h2>
                <div class="flex-wrap grid-row-2 gap-2 py-3">
                    @foreach($wisatas->unique('kategori_wisata') as $wisata)
                        <button class="px-4 py-2 bg-[#283618] text-white rounded-lg m-1.5">{{ $wisata->kategori_wisata }}</button>
                    @endforeach
                </div>
            </section>


            <section>
                <h2 class="text-xl font-semibold mb-2">Berita Pariwisata</h2>
                <div class="overflow-x-auto">
                    <div class="flex p-4 gap-2">
                        @foreach($beritas as $berita)
                            <a href="{{ route('detail.berita', $berita->id) }}" class="w-96 h-60 text-wrap overflow-hidden flex-shrink-0 bg-amber-50 border rounded-2xl shadow-md mr-4">
                                @if ($berita->image_path)
                                    <img src="{{ $berita->image_path }}" alt="{{ $berita->nama_wisata }}" class="w-full h-32 object-cover rounded-b-none mb-2">
                                @endif
                                <div class="p-4">
                                    <h3 class="text-lg font-semibold">{{ $berita->judul }}</h3>
                                    <p class="text-sm text-gray-600">By {{ $berita->penulis }} on {{ $berita->tanggal_terbit }}</p>
                                    <p class="text-wrap mt-2 mb-2">{{ $berita->kontent }}</p>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </section>
        </main>
    </div>
</body>
</html>
