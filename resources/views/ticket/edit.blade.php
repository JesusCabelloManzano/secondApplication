<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>edit</title>
    </head>
    <body>
        <h1>edit: {{ $name }}</h1>
        <form action="{{ url('ticket/' . $id) }}" method="post">
            @method('put')
            @csrf
            <input type="text"   name=""      value="{{ $id    }}" readonly/>
            <input type="text"   name="name"  value="{{ $name  }}"/>
            <input type="number" name="price" value="{{ $price }}"/>
            <input type="date"   name="date"  value="{{ $date  }}"/>
            <input type="time"   name="time"  value="{{ $time  }}"/>
            <input type="submit" value="edit"/>
        </form>
        <a href="{{ url('ticket') }}">index</a><br>
        <a href="{{ url('ticket/' . $id) }}">show</a><br>
        <!--<form action="{{ url('ticket/' . $id) }}" method="post">
            @method('delete')
            @csrf
            <input type="submit" value="destroy"/>
        </form>-->
        <a href="{{ url('ticket/' .  $id . '/delete') }}">delete antiguo</a><br>
        <a id="enlaceBorrar" href="#">delete javascript</a><br>
        <form id="formDelete" action="{{ url('ticket/' . $id) }}" method="post">
            @method('delete')
            @csrf
        </form>
        <script src="{{ url('js/script.js?rand=' . uniqid()) }}"></script>
    </body>
</html>