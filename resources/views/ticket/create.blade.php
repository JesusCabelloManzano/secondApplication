<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>create</title>
    </head>
    <body>
        <h1>create</h1>
        <form action="{{ url('ticket') }}" method="post">
            @csrf <!-- seguridad -->
            <input type="text"   name=""      value="#" readonly/>
            <input type="text"   name="name"  value=""/>
            <input type="number" name="price" value=""/>
            <input type="date"   name="date"  value=""/>
            <input type="time"   name="time"  value=""/>
            <input type="submit" value="create"/>
        </form>
        <a href="{{ url('ticket') }}">index</a><br>
    </body>
</html>