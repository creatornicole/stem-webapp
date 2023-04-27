<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="UTF-8">
        <title>MWC22</title>

        <link rel="stylesheet" href=" {{ asset('css/bootstrap.css') }}">
        <link rel="stylesheet" href=" {{ asset('css/bootstrap.min.css') }}">

    </head>
    <body>

        <div class="row">
            <div class="col-sm">
              <div class="card text-center" style="">
                <div class="card-body">
                    <a href="/live" class="card-link">Live</a>
                </div>
              </div>
            </div>

            <div class="col-sm">
              <div class="card text-center">
                <div class="card-body">
                    <a href="/archive">Archiv</a>
                </div>
              </div>
            </div>
        </div>

        
        
    </body>

    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</html>