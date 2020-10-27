<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>show</title>
    </head>
    <body>
        <h1>show: {{ $name }}</h1>
        id:    {{ $id    }}<br>
        name:  {{ $name  }}<br>
        price: {{ $price }}<br>
        date:  {{ $date  }}<br>
        time:  {{ $time  }}<br>
        <br>
        <a href="{{ url('ticket/' . $id . '/edit') }}">edit</a><br>
        <a href="{{ url('ticket') }}">index</a><br>
        <a href="{{ url('ticket/' . $id . '/delete') }}">delete antiguo</a><br>
        <a id="enlaceBorrar" href="#">delete javascript</a><br>
        <form id="formDelete" action="{{ url('ticket/' . $id) }}" method="post">
            @method('delete')
            @csrf
        </form>
        <script src="{{ url('js/script.js?rand=' . uniqid()) }}"></script>
    </body>
</html>