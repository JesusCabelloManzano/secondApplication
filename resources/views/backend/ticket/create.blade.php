<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Create Ticket</title>
    </head>
    <body>
        @extends('backend.base')
        @section ('content')
            <h3>Create</h3>
            <br>
            <form action="{{ url('backend/ticket') }}" method="post">
                @csrf <!-- seguridad -->
                <input type="text"   name="" value="#" readonly/>
                <input type="text"   name="name"  value="{{ old('name') }}"/>
                <input type="number" name="price" value="{{ old('price') }}"/>
                <input type="date"   name="date"  value="{{ old('date') }}"/>
                <input type="time"   name="time"  value="{{ old('time') }}"/>
                <input type="submit" value="create"/>
            </form>
            <br>
            <a href="{{ url('backend/ticket') }}">Index</a><br>
        @endsection
    </body>
</html>