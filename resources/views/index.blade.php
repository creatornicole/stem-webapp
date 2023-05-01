<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="UTF-8">
        <title>MWC22</title>

        <link rel="stylesheet" href=" {{ asset('css/bootstrap.css') }}">
        <link rel="stylesheet" href=" {{ asset('css/bootstrap.min.css') }}">

    </head>
    <body class="container-fluid" style="height: 100vh;">

        <div class="h-100 d-flex align-items-center justify-content-center">

                <div class="card" style="width: 18rem; height: 22rem;">
                    <div class="card-body align-items-center d-flex justify-content-center">
                        <a class="text-decoration-none" href="/live" class="card-link">Live</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem; height: 22rem;">
                    <div class="card-body align-items-center d-flex justify-content-center">
                        <a class="text-decoration-none" href="/archive">Archiv</a>
                    </div>
                </div>
        </div>
    </body>

    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</html>
