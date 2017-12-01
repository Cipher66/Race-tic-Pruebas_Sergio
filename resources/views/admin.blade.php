@extends('layouts.app')

@section('content')

    <center><h2><u>Panel de administración de usuarios</u></h2></center>
<div id="tabla">
    <center>
    <table border="1px solid black">
        <tr>
            <th>Nombre</th>
            <th>Correo electrónico</th>
            <th>Eliminar</th>
        </tr>
        @foreach($usuarios as $key => $data)
                <tr>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->email }}</td>
                    <td><a href="adminEliminarUsuarios/{{ $data -> id }}" class="btn-danger">Eliminar</a></td>
                </tr>

        @endforeach
    </table>
    </center>
</div>
@endsection