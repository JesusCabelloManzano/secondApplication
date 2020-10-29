<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Delete</title>
    </head>
    <body>
        @extends('backend.base')
        @section('content')
            <h4>¿Seguro que quieres borrar el ticket {{ $name }} que cuesta {{ $price }} euros?</h4>
            <br>
            <form action="{{ url('backend/ticket/' . $id) }}" method="post">
                @method('delete')
                @csrf
                <input type="submit" value="Borrar"/>
            </form>
            <br>
            <a href="{{ url('backend/ticket') }}">index</a>&nbsp;&nbsp;&nbsp;
            <a href="{{ url('backend/ticket/' . $id) }}">show</a>&nbsp;&nbsp;&nbsp;
            <a href="{{ url('backend/ticket/' . $id . '/edit') }}">edit</a>&nbsp;&nbsp;&nbsp;
        @endsection
    </body>
</html>