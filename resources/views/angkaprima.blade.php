<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Number Finder</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto mt-10">
        <div class="bg-white p-8 rounded-lg shadow-lg max-w-md mx-auto">
            <h1 class="text-2xl font-bold text-center mb-4">Prime Number Finder</h1>
            <form action="/angkaprima" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="start" class="block text-gray-700">Start Number:</label>
                    <input type="number" name="start" class="w-full px-3 py-2 border rounded-lg" required>
                </div>
                <div class="mb-4">
                    <label for="end" class="block text-gray-700">End Number:</label>
                    <input type="number" name="end" class="w-full px-3 py-2 border rounded-lg" required>
                </div>
                <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600">Submit</button>
            </form>

            @if(isset($primes))
                <h2 class="text-xl font-bold text-center mt-4">Prime Numbers:</h2>
                <ul class="mt-2">
                    @foreach($primes as $prime)
                        <li class="bg-gray-200 p-2 rounded-lg mb-2">{{ $prime }}</li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
</body>
</html>
