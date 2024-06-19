<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil</title>
    @vite('resources/css/app.css')
</head>
<body>
    <h1>Weekend Dates</h1>
    @if (count($dates) > 0)
        <ul>
            @foreach ($dates as $date)
                <li>{{ $date }}</li>
            @endforeach
        </ul>
    @else
        <p>No weekend dates found in the given range.</p>
    @endif

    <a href="{{ route('uas') }}">Back to Form</a>
</body>
</html>
