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
    <?php
        if(DB::connection()->getPdo()){
            echo "Successfully connected to DB and DB is ".DB::connection()->getDatabaseName();
        }
    ?>
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
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
        </tbody>
    </table>
</body>
</html>
