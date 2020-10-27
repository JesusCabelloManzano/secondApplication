<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Delete</title>
    </head>
    <body>
        ¿Seguro que quieres borrar el ticket {{ $name }} que cuesta {{ $price }} euros?
        <form action="{{ url('ticket/' . $id) }}" method="post">
            @method('delete')
            @csrf
            <input type="submit" value="destroy"/>
        </form>
        <a href="{{ url('ticket') }}">index</a><br>
        <a href="{{ url('ticket/' . $id) }}">show</a><br>
        <a href="{{ url('ticket/' . $id . '/edit') }}">edit</a><br>
    </body>
</html>