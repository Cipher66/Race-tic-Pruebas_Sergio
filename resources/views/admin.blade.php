@extends('layouts.app')

    <link href="{{ asset('../css/estiloshome.css') }}" rel="stylesheet" type="text/css" >

@section('content')

    <div style="text-align:center;">
        <p><h2><u>Panel de administración de usuarios</u></h2></p>
    </div>

<div id="tabla">

    <table border="1px solid black" align="center">
        <tr>
            <th>Nombre</th>
            <th>Correo electrónico</th>
            <th>Eliminar</th>
            <th>Editar</th>
            <th>Confirmado</th>
        </tr>
        @foreach($usuarios as $key => $data)
        <tr>
            <td>{{ $data->name }}</td>
            <td>{{ $data->email }}</td>
            <td><a href="adminEliminarUsuario/{{ $data -> id }}" class="miBoton">Eliminar</a></td>
            <td><a href="{{ url('/adminEditarUsuario/'.$data->id) }}" class="botonEditar">Editar</a></td>
            <td id="confirmacion">
                @if($data -> verified == 0)
                    <img src="../images/x_no.png" />
                @else
                    <img src="../images/tick_si.png" />
                @endif
            </td>
        </tr>
        @endforeach

        <!--  -->

    </table>

</div>
@endsection