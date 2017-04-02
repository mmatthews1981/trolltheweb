<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Unica+One" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Scope+One" rel="stylesheet">

        <!-- Styles -->

        <link rel="stylesheet" href="css/app.css">

    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="pull-right navigation">
                    <a href="{{ url('/about') }}">About</a>
                    <a href="{{ url('/api') }}">API</a>
                </div>
            </div>
        </div>

        <div class="container main">
            <div class="content">
                <div class="row">
                    <div class="title">
                        <h1>PHP Does Not Suck</h1>
                        <img class="logo" src="img/logo.png" alt="PHP Does Not Suck" />
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-2 quotationmarks">
                        &#8220
                    </div>

                    <div class="col-md-8">
                        <div class="quote">
                            {{ $quote->body }} <a href="{{ url('/quote/'.$quote->id) }}">#</a>
                        </div>
                        <div class="attribution">
                            <div><a class="link" href="{{ $quote->author_link }}">{{ $quote->author }}</a></div>
                            <div><a class="btn btn-primary link" href="{{ $quote->source }}">Source</a></div>
                        </div>
                    </div>

                    <div class="col-md-2 quotationmarks">
                        &#8221
                    </div>
                </div>

            </div>
        </div>

        <div id="footer" class="container-fluid">
            <div>
                Curated and built by <a href="https://www.linkedin.com/in/meredithmatthews/">Mer</a>, Designed by <a href="http://theaxisofeva.com">Eva</a>
            </div>
        </div>

    </body>
</html>
