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
                <div class="col-sm">           
                    <div id="map" style="height: 50vh;"></div>
                </div>
              </div>
        </div>
    </div>  
  
    <script type="text/javascript">
        function initMap() {
          const myLatLng = { lat: 50.988766, lng: 12.968090 };
          const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 17,
            center: myLatLng,
          });
  
          new google.maps.Marker({
            position: myLatLng,
            map,
          });
        }
  
        window.initMap = initMap;
    </script>
  
  <script type="text/javascript" src="https://maps.google.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&callback=initMap" ></script>
</body>
</html>
