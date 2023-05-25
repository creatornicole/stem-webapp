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
                <div style="float: right;">
                    <a href="" class="btn-sm">Map</a>
                    <a href="" class="btn-sm">Analyse</a>
                    <a href="" class="btn-sm">Safe</a>
                    <a href="/live/changeStatus" class="btn-sm btn-success">Archive</a>   
                </div>
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
                    
                    <iframe id="googleMapsFrame" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1277477.8507661172!2d12.491479825886458!3d51.291363598784976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47a851c4adb5e545%3A0x91a95da0b8c28d69!2sGoogle%20Berlin!5e0!3m2!1sde!2sde!4v1685027434145!5m2!1sde!2sde" 
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                   

                </div>
              </div>
        </div>
    </div>  
</body>
</html>

