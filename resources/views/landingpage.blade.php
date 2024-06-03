<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    @vite('resources/css/app.css')
</head>
<body>
    <button onclick="window.location.href='{{ route('login') }}'" class="w-1/2 h-16 bg-red-600 text-white font-bold text-2xl rounded-lg">Login</button>
</body>
</html>
