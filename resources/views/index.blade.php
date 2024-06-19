<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date Range Input</title>
</head>
<body>
    <h1>Input Date Range</h1>
    <form action="{{ route('submit.dates') }}" method="POST">
        @csrf
        <label for="start_date">Start Date:</label>
        <input type="date" id="start_date" name="start_date" required>
        <br>
        <label for="end_date">End Date:</label>
        <input type="date" id="end_date" name="end_date" required>
        <br>
        <button type="submit">Submit</button>
    </form>

    @if(isset($weekendDates))
        <h2>Weekend Dates:</h2>
        <ul>
            @foreach($weekendDates as $date)
                <li>{{ $date['day'] }}, {{ $date['date'] }}</li>
            @endforeach
        </ul>
    @endif
</body>
</html>
