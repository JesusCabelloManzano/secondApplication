<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>index</title>
    </head>
    <body>
        <h1>index</h1>
        @if(Session::get('op') !== null)
            <h2>
                Resultado de la operación:
                {{ Session::get('op') }}
                {{ Session::get('result') }}
                {{ Session::get('id') }}
            </h2>
        @endif
        <a href="{{ url('ticket/create') }}">create</a>
        <table border="1">
            <tr>
                <th>id #</th>
                <th>name</th>
                <th>price</th>
                <th>show</th>
                <th>edit</th>
                <th>delete</th>
            </tr>
            <tr>
                <td>1</td>
                <td>brunch</td>
                <td>12.2</td>
                <td><a href="{{ url('ticket/1') }}">show</a></td>
                <td><a href="{{ url('ticket/1/edit') }}">edit</a></td>
                <td>don't know</td>
            </tr>
            <tr>
                <td>2</td>
                <td>lunch</td>
                <td>22.2</td>
                <td><a href="{{ url('ticket/2') }}">show</a></td>
                <td><a href="{{ url('ticket/2/edit') }}">edit</a></td>
                <td>don't know</td>
            </tr>
            <tr>
                <td>3</td>
                <td>breakfast</td>
                <td>6.2</td>
                <td><a href="{{ url('ticket/3') }}">show</a></td>
                <td><a href="{{ url('ticket/3/edit') }}">edit</a></td>
                <td>don't know</td>
            </tr>
            <tr>
                <td>4</td>
                <td>dinner</td>
                <td>44.4</td>
                <td><a href="{{ url('ticket/4') }}">show</a></td>
                <td><a href="{{ url('ticket/4/edit') }}">edit</a></td>
                <td>don't know</td>
            </tr>
        </table>
        <br><br>
        <table border="1">
            <tr>
                <th>id #</th>
                <th>name</th>
                <th>price</th>
                <th>show</th>
                <th>edit</th>
                <th>delete antiguo</th>
                <th>delete</th>
            </tr>
            @foreach ($tickets as $ticket)
                <tr>
                    <td>{{ $ticket['id'] }}</td>
                    <td>{{ $ticket['name'] }}</td>
                    <td>{{ $ticket['price'] }}</td>
                    <td><a href="{{ url('ticket/' . $ticket['id']) }}">show</a></td>
                    <td><a href="{{ url('ticket/' . $ticket['id'] . '/edit') }}">edit</a></td>
                    <td><a href="{{ url('ticket/' . $ticket['id'] . '/delete') }}">delete</a></td>
                    <td><a data-id="{{ $ticket['id'] }}" class="enlaceBorrar" href="#">delete javascript</a></td>
                </tr>
            @endforeach
        </table>
        <form id="formDelete" action="{{ url('ticket') }}" method="post">
            @method('delete')
            @csrf
        </form>
        <a href="{{ url('ticket/create') }}">create</a>&nbsp;&nbsp;&nbsp;

        <a href="{{ url('/') }}">main: url</a>&nbsp;&nbsp;&nbsp;
        <a href="{{ route('main') }}">main: name</a>&nbsp;&nbsp;&nbsp;
        <a href="{{ action([App\Http\Controllers\TicketController::class, 'main']) }}">main: action</a>

        <script src="{{ url('js/script.js?rand=' . uniqid ()) }}"></script>
    </body>
</html>