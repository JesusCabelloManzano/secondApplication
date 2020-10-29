<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Ticket Edit</title>
    </head>
    <body>
        @extends('backend.base')
        @section('content')
            <h3>Edit</h3><br>
            <h4><b>ID: </b> {{ $id }} &nbsp;&nbsp; <b>Name: </b> {{ $name }}</h4><br>
            <form action="{{ url('backend/ticket/' . $id) }}" method="post">
                @method('put')
                @csrf
                <input type="text"   name=""      value="{{ $id    }}" readonly/>
                <input type="text"   name="name"  value="{{ $name  }}"/>
                <input type="number" name="price" value="{{ $price }}"/>
                <input type="date"   name="date"  value="{{ $date  }}"/>
                <input type="time"   name="time"  value="{{ $time  }}"/>
                <input type="submit" value="edit"/>
            </form>
            <br>
            <a href="{{ url('backend/ticket/' . $id) }}">Show</a>&nbsp;&nbsp;&nbsp;
            <!--<form action="{{ url('ticket/' . $id) }}" method="post">
                @method('delete')
                @csrf
                <input type="submit" value="destroy"/>
            </form>-->
            <a href="{{ url('backend/ticket/' .  $id . '/delete') }}">Delete Antiguo</a>&nbsp;&nbsp;&nbsp;
            <a id="enlaceBorrar" href="#">Delete Javascript</a>&nbsp;&nbsp;&nbsp;
            <form id="formDelete" action="{{ url('backend/ticket/' . $id) }}" method="post">
                @method('backend.delete')
                @csrf
            </form>
            <script src="{{ url('js/script.js?rand=' . uniqid()) }}"></script>
        @endsection
    </body>
</html>