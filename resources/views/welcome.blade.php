<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>What's For Dinner</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Oleo+Script|Playball|Special+Elite" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="/css/app.css">
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
        <script src="/node_modules/slick-carousel/slick/slick.js" type="text/javascript" charset="utf-8"></script>
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    </head>
    <body>
    <div class="d-flex bg-light justify-content-center header" id="top">
        <img class="w-100 align-self-center" src="/6.jpg">
        <h1> What's For Dinner ?</h1>
    </div>
    <div id="app">
    <recipes></recipes>
    </div>
    <div class="d-flex w-100 h-100 bg-dark p-4 justify-content-end text-white">
        <p>Lala Rukh --</p>
        <p> Hays Travel</p>
    </div>
    </body>
</html>

