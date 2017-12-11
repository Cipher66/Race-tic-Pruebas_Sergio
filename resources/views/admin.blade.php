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
            <th>Editar</th>
            <th>Confirmado</th>
        </tr>
        @foreach($usuarios as $key => $data)
        <tr>
            <td>{{ $data->name }}</td>
            <td>{{ $data->email }}</td>
            <td><a href="adminEliminarUsuarios/{{ $data -> id }}" class="miBoton">Eliminar</a></td>
            <td><a href="" class="botonEditar">Editar</a></td>
            <td></td>
        </tr>
        <div class="">
            <form method="post" action="adminEditarUsuario">
                <input type="hidden" name="id" value="{{ $data->id }}"/>
                <strong>Nombre:</strong><br>
                <input type="text" name="name" value="{{ $data->name }}"/>
                <strong>Email:</strong>
                <input type="text" name="email" value="{{ $data->email }}"/>
                <input type="submit" value="Actualizar perfil">
            </form>
        </div>
        @endforeach
    </table>
    </center>
</div>
@endsection