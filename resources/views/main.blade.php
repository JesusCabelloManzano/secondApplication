<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Main Page</title>
    </head>
    <body>
        @extends('base')
        @section('content')
            <h4>Tickets. Frontend page.</h4>
            <h5>Offer of the month!!!</h5>
            <h4>{{ $name }}, only {{ $price }} €!!!</h4>
            <br>
            <!--<a href="{{ 'ticket' }}">Ver mas tickets</a>-->
        @endsection
        </body>
</html>