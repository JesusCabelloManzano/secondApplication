<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Ticket Show</title>
    </head>
    <body>
        @extends('backend.base')
        @section('content')
            <h3>Show: {{ $name }}</h3><br>
            <h4><b>Id:</b>    {{ $id    }}</h4>
            <h4><b>Name:</b>  {{ $name  }}</h4>
            <h4><b>Price:</b> {{ $price }}</h4>
            <h4><b>Date:</b>  {{ $date  }}</h4>
            <h4><b>Time:</b>  {{ $time  }}</h4>
            <br>
            <a href="{{ url('backend/ticket/' . $id . '/edit') }}">Edit</a>&nbsp;&nbsp;&nbsp;
            <a href="{{ url('backend/ticket/' . $id . '/delete') }}">Delete Antiguo</a>&nbsp;&nbsp;&nbsp;
            <a id="enlaceBorrar" href="#">Delete Javascript</a>
            <form id="formDelete" action="{{ url('backend/ticket/' . $id) }}" method="post">
                @method('backend.delete')
                @csrf
            </form>
            <script src="{{ url('js/script.js?rand=' . uniqid()) }}"></script>
        @endsection
    </body>
</html>