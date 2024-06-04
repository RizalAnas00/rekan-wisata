<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-[#FEFAE0]">
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

    <!-- Background Image Section -->
    <div class="relative flex flex-col justify-center items-center h-screen">
        <img src="{{ asset('images/pantai1.jpg') }}" alt="Background Image" class="absolute inset-0 w-full h-full object-cover z-0">
        <div class="absolute inset-0 bg-gradient-to-t from-[#283618] to-transparent z-10"></div>
        <div class="z-20 text-center text-[#FEFAE0] font-bold text-xl lg:text-2xl container mx-auto px-8 lg:px-0">
            <h2>NIKMATI KEINDAHAN ALAM DAN BUDAYA INDONESIA BERSAMA</h2>
            <h2 class="text-2xl lg:text-3xl text-[#DDA15E]">REKAN WISATA</h2>
        </div>
        <div class="z-20 mt-8 lg:mt-12">
            <button onclick="window.location.href='{{ route('login') }}'" class="w-56 md:w-64 h-10 md:h-12 bg-[#BC6C25] text-[#FEFAE0] font-bold text-lg md:text-xl rounded-xl">Login</button>
        </div>
    </div>

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
                    <a href="#" class="flex items-center p-2 text-[#E0D5BB] rounded-lg hover:bg-[#FEFAE0] hover:bg-opacity-20 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-[#D2C8A8] transition duration-75 group-hover:text-[#E0D5BB]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3"/>
                        </svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">Sign In</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-2 text-[#E0D5BB] rounded-lg hover:bg-[#FEFAE0] hover:bg-opacity-20 group">
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

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const toggleButton = document.querySelector('[data-drawer-show="drawer-navigation"]');
            const drawer = document.getElementById('drawer-navigation');
            const closeButton = drawer.querySelector('[data-drawer-hide="drawer-navigation"]');
            const overlay = document.getElementById('overlay');
            
            toggleButton.addEventListener('click', function () {
                drawer.classList.toggle('translate-x-full');
                overlay.classList.toggle('hidden');
            });
            
            closeButton.addEventListener('click', function () {
                drawer.classList.add('translate-x-full');
                overlay.classList.add('hidden');
            });

            overlay.addEventListener('click', function () {
                drawer.classList.add('translate-x-full');
                overlay.classList.add('hidden');
            });
        });
    </script>
</body>
</html>
