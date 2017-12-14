@extends('layouts.app')

@section('content')

    <p><h2><u>Panel de administración de usuarios</u></h2></p>

        <form id="formulario">
            <h1>hola</h1>
            <input type="text"/>
        </form>

<div id="tabla">

    <table border="1px solid black">
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
            <td><a href="adminEliminarUsuarios/{{ $data -> id }}" class="miBoton">Eliminar</a></td>
            <td><a href="/adminEditarUsuario/{{ $data -> id }}" class="botonEditar">Editar</a></td>
            <td></td>
        </tr>
        @endforeach
    </table>

</div>
@endsection


<!--
action="adminActualizarUsuario"
-->