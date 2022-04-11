<?php
    $hw = 'Hello World!';

    $array = [
        '12',
        '24',
        '64',
        '94'
    ];
?>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body>
        <h1>{{ $hw }}</h1>

        <p>Stampo il mio array con un ciclo:</p>
        @foreach($array as $number)
            <p>{{$number}}</p>
        @endforeach

        <p>L'array ha: {{count($array)}} elementi!</p>
    </body>
</html>