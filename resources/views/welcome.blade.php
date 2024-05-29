<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        @vite('resources/css/app.css')
    </head>
    <body class="bg-gray-100">
        <!-- Navbar -->
        <nav class="bg-blue-500 p-4">
            <div class="container mx-auto flex justify-between items-center">
                <a href="#" class="text-white font-semibold text-xl">HMT</a>
                <button class="text-white focus:outline-none md:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
                <div class="hidden md:flex space-x-4">
                    <a href="#" class="text-white hover:text-gray-200">Home</a>
                    <a href="#" class="text-white hover:text-gray-200">About</a>
                    <a href="#" class="text-white hover:text-gray-200">Contact</a>
                </div>
            </div>
        </nav>
    
        <!-- Main Content -->
        @yield('content')
    
        <!-- Footer -->
        <footer class="bg-gray-900 text-white py-4 mt-8">
            <div class="container mx-auto text-center">
                <p>&copy; 2024 Himpunan Mahasiswa Teknik</p>
            </div>
        </footer>
    
        <!-- JavaScript (not necessary for Tailwind CSS) -->
        <!-- <script src="your-script.js"></script> -->
        @yield('scripts')
    </body>
</html>
