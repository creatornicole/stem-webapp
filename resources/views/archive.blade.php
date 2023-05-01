<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>MWC22</title>

    <link rel="stylesheet" href=" {{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href=" {{ asset('css/bootstrap.min.css') }}">
</head>
<body>
    <h1>{{ $heading }}</h1>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">Datum</th>
            <th scope="col">Uhrzeit</th>
            <th scope="col">GPS</th>
            <th scope="col">pH</th>
            <th scope="col">Temperatur</th>
        </tr>
        </thead>
        <tbody>
        <!-- foreach -->
        @foreach($measurements as $measurement)
            <tr>
                <td>{{ $measurement->date }}</td>
                <td>{{ $measurement->time }}</td>
                <td>{{ $measurement->latitude }}, {{ $measurement->longitude }}</td>
                <td>{{ $measurement->ph }}</td>
                <td>{{ $measurement->temp }}°C</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>
