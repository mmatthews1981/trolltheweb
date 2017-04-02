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
            <div class="pull-right">
                <a href="{{ url('/about') }}">About</a>
                <a href="{{ url('/api') }}">API</a>
            </div>
        </div>

        <div class="container">
            <div class="content">
                <div class="title">
                    <h1>PHP Does Not Suck</h1>
                    <img class="logo" src="img/logo.png" alt="PHP Does Not Suck" />
                </div>
                <p>
                    {{ $quote->body }}
                </p>
                <p>
                    <a href="{{ $quote->author_link }}">{{ $quote->author }}</a>
                </p>
                <p>
                    <a href="{{ $quote->source }}">Source</a>
                </p>
                <p>
                    <a href="{{ url('/quote/'.$quote->id) }}">Direct Link</a>
                </p>
            </div>
        </div>

    </body>
</html>
