<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Lyfter Challenges</title>

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="css/app.css">
        <link rel="stylesheet" href="css/home.css">

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Lyfter Challenges
                </div>

                <div class="links">
                    <a href="{{ url('/cleaner') }}">String Cleaner</a>
                    <a href="{{ url('/fizzbuzz') }}">Fizzbuzz Generator</a>
                </div>
            </div>
        </div>


        <script src="js/app.js" charset="utf-8"></script>
    </body>
</html>
