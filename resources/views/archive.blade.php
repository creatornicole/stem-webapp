<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>MWC22</title>

    <link rel="stylesheet" href=" {{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href=" {{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href=" {{ asset('css/style.css') }}">
</head>
<body>
    <div class="card">
        <div class="card-header text-white">
            <span class="card-title">
                {{ $heading }}
            </span>
        </div>
        <div class="card-body">
            <h3>{{ $heading }}</h3>

            <div class="row">
                <div class="col-sm">
                  <table class="table table-condensed-2 table-list table-hover table-striped">
                      <thead>
                          <tr>
                              <th>Datum</th>
                              <th>Uhrzeit</th>
                              <th>GPS</th>
                              <th>pH</th>
                              <th>Temperatur</th>
                          </tr>
                      </thead>
                      <tbody>
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
                </div>
                <div class="col-sm" style="text-align: center;">
                  Google Maps
                </div>
              </div>
        </div>
    </div>  
</body>
</html>
