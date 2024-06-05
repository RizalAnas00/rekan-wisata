<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-[#FFFFFF]">
    <header class="bg-[#283618] shadow-2xl">
        <div class="flex max-w-7xl mx-auto p-4 gap-3">
            <img src="{{ asset('images/logoterang.svg') }}" alt="Logo" class="w-12 h-12">
            <h1 class="text-center py-3 text-lg font-bold text-[#FEFAE0]">REKAN WISATA</h1>
            <div class="ml-auto">
                <a href="#" data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation" aria-controls="drawer-navigation">
                    <img src="{{ asset('images/sidebarlight.svg') }}" alt="Sidebar" class="w-full h-full">
                </a>
            </div>
        </div>
    </header>
<main>
    <!-- Background Image Section -->
    <div class="relative flex flex-col justify-center items-center h-screen">
        <img src="{{ asset('images/background/pantai2.jpg') }}" alt="Background Image" class="absolute inset-0 w-full h-full object-cover z-0">
        <div class="absolute inset-0 bg-gradient-to-t from-[#283618] to-transparent z-10"></div>
        <div class="z-20 pt-96 px-6 mt-32 lg:mt-64 text-center text-[#FEFAE0] font-bold text-xl lg:text-3xl lg:mb-10">
            <h2>NIKMATI KEINDAHAN ALAM DAN BUDAYA INDONESIA BERSAMA</h2>
            <h2 class="text-3xl lg:text-4xl text-[#DDA15E]">REKAN WISATA</h2>
        </div>
        <div class="z-20 mt-20 lg:mt-24 text-center text-[#FEFAE0] font-bold text-lg lg:text-xl">
            <button onclick="window.location.href='{{ route('login') }}'" class="w-56 md:w-64 h-10 md:h-12 bg-[#BC6C25] text-[#FEFAE0] font-bold text-lg md:text-xl rounded-xl">Login</button>
        </div>
    </div>

    <!-- Ganti Absolute ke Relative fixed the footer, tapi malah ada gap -->
    <div class="absolute left-0 w-full h-3/4 bg-gradient-to-b from-[#283618] to-transparent z-auto mb-20">
        <div class="mt-32 pt-32 lg:mt-20 text-center text-[#283618] font-bold text-2xl lg:text-3xl">
            <p>Rekan Wisata Bisa Apa?</p>
        </div>
        <div class = "mx-auto w-full max-w-screen-md h-3/4 px-10">
            <div class="pt-8 flex items-center justify-center">
                <div class="w-full h-38 flex flex-col items-center  bg-[#FEFAE0] rounded-3xl p-4 shadow-md">
                    <img src="{{ asset('images/bumipin.svg') }}" alt="Background Image" class="w-8 h-8 object-cover mb-0.5">
                    <p class="text-center text-[#283618] font-bold text-base lg:text-lg">Berkeliling Indonesia</p>
                    <p class="text-xs text-center mt-3">
                        Dengan Rekan Wisata kita bisa mencari informasi dari berbagai destinasi wisata di seluruh Indonesia lohhh
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-1 gap-4 pt-5 md:grid-cols-2 lg:grid-cols-2 items-center mx-auto ">
                <div class="w-full h-38 flex flex-col items-center justify-center lg:h-64 pb-6 bg-[#FEFAE0] rounded-3xl p-4 shadow-md">
                    <div class="flex items-center justify-center">
                        <img src="{{ asset('images/peoplehead.svg') }}" alt="Background Image" class="w-8 h-8 object-cover">
                    </div>
                    <p class="text-center text-[#283618] font-bold text-lg lg:text-xl mt-3">Tour Guide Ramah Tamah</p>
                    <p class="text-xs text-center mt-1">
                        Di beberapa destinasi wisata terdapat fitur tour guide agar perjalananmu jauh lebih seru
                    </p>
                </div>
                <div class="w-full h-38 flex flex-col items-center justify-center lg:h-64 pb-6 bg-[#FEFAE0] rounded-3xl p-4 shadow-md">
                    <div class="flex items-center justify-center">
                        <img src="{{ asset('images/37 rating.svg') }}" alt="Background Image" class="w-8 h-8 object-cover">
                    </div>
                    <p class="text-center text-[#283618] font-bold text-lg lg:text-xl mt-3">Review Pengunjung</p>
                    <p class="text-xs text-center mt-1">
                        Kita juga bisa melihat berbagai review unik dari para pengunjung yang telah mengunjungi destinasi wisata secara langsung                    </p>
                </div>
                <div class="w-full h-38 flex flex-col items-center justify-center lg:h-64 pb-6 bg-[#FEFAE0] rounded-3xl p-4 shadow-md">
                    <div class="flex items-center justify-center">
                        <img src="{{ asset('images/kalender.svg') }}" alt="Background Image" class="w-8 h-8 object-cover">
                    </div>
                    <p class="text-center text-[#283618] font-bold text-lg lg:text-xl mt-3">Penjadwalan Wisata</p>
                    <p class="text-xs text-center mt-1">
                        Kita bisa menjadwalkan hari liburan untuk pergi ke destinasi wisata tertentu sebagai pengingat agar  rencana kita tidaklah wacana                    </p>
                </div>
                <div class="w-full h-38 flex flex-col items-center justify-center lg:h-64 pb-6 bg-[#FEFAE0] rounded-3xl p-4 shadow-md">
                    <div class="flex items-center justify-center">
                        <img src="{{ asset('images/berita.svg') }}" alt="Background Image" class="w-8 h-8 object-cover">
                    </div>
                    <p class="text-center text-[#283618] font-bold text-lg lg:text-xl mt-3">Berita Dunia Pariwisata</p>
                    <p class="text-xs text-center mt-1">
                        Fitur berita disediakan secara ekslusif untuk tetap up to date tentang berita terkini pariwisata Indonesia                    </p>
                </div>
            </div>

             <!-- Review Cards Section -->
                <div class="w-3/4 mx-auto overflow-x-auto">
                    <div class="mt-6 py-10 lg:mt-20 text-center text-[#606C38] font-bold text-2xl lg:text-3xl ">
                        <p>Apa kata mereka tentang Rekan Wisata...?</p>
                    </div>
                    <div class="flex space-x-4">
                        @for ($i = 0; $i < 5; $i++)
                            <div class="flex-none w-60 h-72 bg-[#283618] rounded-3xl overflow-hidden shadow-inner-md-custom">
                                <div class="flex flex-col h-full justify-between">
                                    <div class="p-4 text-center text-[#FEFAE0] font-bold text-lg">
                                        <p>Website yang bagus sekali, sangat bermanfaat, sangat membantu, saya sebagai pengunjung merasa puas dengan website ini</p>
                                    </div>
                                    <div class="bg-[#606C38] flex items-center p-4 text-[#FEFAE0]">
                                        <img src="{{ asset('images/profil terang.svg') }}" alt="User Image" class="w-8 h-8 rounded-full">
                                        <div class="ml-2 font-semibold">
                                            <p>Aceng Tegal William</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>

                <div class="absolute left-0 w-full h-5/6 bg-gradient-to-b from-transparent to-[#283618] text-[#FEFAE0]">
                    <div class="mt-40">
                        <div class="mx-10 mb-6">
                            <h1 class=" text-[#FEFAE0] font-bold text-2xl lg:text-4xl">Layanan Pelanggan</h1>
                        </div>
                        <div class="flex flex-col mx-10 space-y-2 mb-6">
                            <p class="flex items-center"><img src="{{ asset('images/emailicon.svg') }}" alt="Email Icon" class="w-5 h-5 mr-2"> rekanwisata@gmail.com</p>
                            <p class="flex items-center"><img src="{{ asset('images/alamaticon.svg') }}" alt="Email Icon" class="w-5 h-5 mr-2">Jalan apajadah Kel. Kejambron Jawa Tengah, Indonesia</p>
                            <p class="flex items-center"><img src="{{ asset('images/telponIcon.svg') }}" alt="Email Icon" class="w-5 h-5 mr-2">021-777-9782</p>
                        </div>
                        <div class="mx-10">
                            <p class="text-sm">&copy; 2023 Rekan Wisata. All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>



    <!-- Overlay -->
    <div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 z-30 hidden"></div>

    <!-- Drawer component -->
    <div id="drawer-navigation" class="fixed top-0 right-0 z-40 w-40 h-screen p-4 overflow-y-auto bg-[#FEFAE0] bg-opacity-10 backdrop-blur-xl transform translate-x-full transition-transform" tabindex="-1" aria-labelledby="drawer-navigation-label">
        <button type="button" data-drawer-hide="drawer-navigation" aria-controls="drawer-navigation" class="text-[#E0D5BB] bg-transparent hover:bg-[#FEFAE0] hover:bg-opacity-20 hover:text-[#E0D5BB] rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center">
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            <span class="sr-only">Close menu</span>
        </button>
        <h5 id="drawer-navigation-label" class="text-base font-semibold text-[#E0D5BB] hover:text-[#FEFAE0] uppercase">Menu</h5>
        <div class="py-4 overflow-y-auto">
            <ul class="space-y-2 font-medium">
                <li>
                    <a href="{{ route('login') }}" class="flex items-center p-2 text-[#E0D5BB] rounded-lg hover:bg-[#FEFAE0] hover:bg-opacity-20 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-[#D2C8A8] transition duration-75 group-hover:text-[#E0D5BB]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3"/>
                        </svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">Sign In</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('register.step1') }}" class="flex items-center p-2 text-[#E0D5BB] rounded-lg hover:bg-[#FEFAE0] hover:bg-opacity-20 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-[#D2C8A8] transition duration-75 group-hover:text-[#E0D5BB]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.96 2.96 0 0 0 .13 5H5Z"/>
                            <path d="M6.737 11.061a2.961 2.961 0 0 1 .81-1.515l6.117-6.116A4.839 4.839 0 0 1 16 2.141V2a1.97 1.97 0 0 0-1.933-2H7v5a2 2 0 0 1-2 2H0v11a1.969 1.969 0 0 0 1.933 2h12.134A1.97 1.97 0 0 0 16 18v-3.093l-1.546 1.546c-.413.413-.94.695-1.513.81l-3.4.679a2.947 2.947 0 0 1-1.85-.227 2.96 2.96 0 0 1-1.635-3.257l.681-3.397Z"/>
                            <path d="M8.961 16a.93.93 0 0 0 .189-.019l3.4-.679a.961.961 0 0 0 .49-.263l6.118-6.117a2.884 2.884 0 0 0-4.079-4.078l-6.117 6.117a.96.96 0 0 0-.263.491l-.679 3.4A.961.961 0 0 0 8.961 16Zm7.477-9.8a.958 1. 0 0 1 .68-.281.961.961 0 0 1 .682 1.644l-.315.315-1.36-1.36.313-.318Zm-5.911 5.911 4.236-4.236 1.359 1.359-4.236 4.237-1.7.339.341-1.699Z"/>
                        </svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">Sign Up</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <!-- Event listener for the toggle button and close button of the navigation drawer. -->
    <!-- It toggles the visibility of the drawer and the overlay. -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Get the toggle button and the drawer element
            const toggleButton = document.querySelector('[data-drawer-show="drawer-navigation"]');
            const drawer = document.getElementById('drawer-navigation');

            // Get the close button and the overlay element
            const closeButton = drawer.querySelector('[data-drawer-hide="drawer-navigation"]');
            const overlay = document.getElementById('overlay');

            // Add event listener to the toggle button
            toggleButton.addEventListener('click', function () {
                // Toggle the visibility of the drawer and the overlay
                drawer.classList.toggle('translate-x-full');
                overlay.classList.toggle('hidden');
            });

            // Add event listener to the close button
            closeButton.addEventListener('click', function () {
                // Hide the drawer and the overlay
                drawer.classList.add('translate-x-full');
                overlay.classList.add('hidden');
            });

            // Add event listener to the overlay
            overlay.addEventListener('click', function () {
                // Hide the drawer and the overlay
                drawer.classList.add('translate-x-full');
                overlay.classList.add('hidden');
            });
        });
    </script>

</body>

</html>
