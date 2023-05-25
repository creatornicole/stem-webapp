<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="UTF-8">
        <title>MWC22</title>

        <link rel="stylesheet" href=" {{ asset('css/bootstrap.css') }}">
        <link rel="stylesheet" href=" {{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href=" {{ asset('css/style.css') }}">

    </head>
    <body class="container-fluid" style="height: 100vh;">

        <div class="h-100 d-flex align-items-center justify-content-center">

                <div class="card" style="background-color: #033b74; width: 23rem; height: 27rem;">
                    <div class="card-body align-items-center d-flex justify-content-center">
                        <a class="text-decoration-none" href="/live" class="card-link" style="text-align: center;">
                            <img src="{{ asset('img/live-white.png') }}" height="100px" width="100px" style="margin-bottom:40px;">
                            <p>Live</p>                                        
                        </a>
                    </div>
                </div>
                <div class="card" style="background-color: #0b58a5; width: 23rem; height: 27rem;">
                    <div class="card-body align-items-center d-flex justify-content-center">
                        <a class="text-decoration-none" href="/archive" style="text-align: center;">
                            <img src="{{ asset('img/archive-white.png') }}" height="100px" width="100px" style="margin-bottom:40px;">
                            <p>Archiv</p>
                        </a>
                    </div>
                </div>
        </div>
    </body>

    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</html>

<!-- <a href="https://www.flaticon.com/free-icons/on-air" title="on air icons">On air icons created by Freepik - Flaticon</a> -->
<!-- <a href="https://www.flaticon.com/free-icons/unstructured-data" title="unstructured data icons">Unstructured data icons created by Freepik - Flaticon</a> -->
