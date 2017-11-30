@extends('layouts.app')

@section('content')

    <center><h2><u>Panel de administración de usuarios</u></h2></center>
<div id="tabla">
    <center>
    <table border="1px solid black">
        @foreach($usuarios as $key => $data)

                <tr>
                    <th>Nombre</th>
                    <th>Correo electrónico</th>
                    <th>Eliminar</th>
                </tr>
                <tr>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->email }}</td>
                    <td><button id="boton">Eliminar</button></td>
                </tr>

        @endforeach
    </table>
    </center>
</div>
@endsection