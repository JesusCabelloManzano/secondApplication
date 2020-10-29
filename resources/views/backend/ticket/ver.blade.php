<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Ver</title>
    </head>
    <body>
        <form action="{{ url('backend/ticket') }}" method="POST">
            @csrf
            <input type="submit" value="Submit"/>
        </form>
        <form action="{{ url('backend/ticket/12') }}" method="POST">
            @csrf
            @method('put')
            <input type="submit" value="Submit"/>
        </form>
        <form action="{{ url('backend/ticket/122') }}" method="POST">
            @csrf
            @method('backend.delete')
            <input type="submit" value="Submit"/>
        </form>
    </body>
</html>