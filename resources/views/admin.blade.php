@extends('layouts.app')

@section('content')

    <p><h2><u>Panel de administración de usuarios</u></h2></p>

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
            <td><button type="button"
                    class="botonEditar"
                    data-toggle="modal"
                    data-target="#myModal">Editar</button></td>
            <td></td>
        </tr>
        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
                <!-- Contenido del modal -->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button"
                                class="close"
                                data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Editar Usuario</h4>
                    </div>
                    <div class="modal-body">
                        <p>Some text in the modal</p>

                    </div>
                    <div class="modal-footer">
                        <button type="button"
                                class="botonCerrar"
                                data-dismiss="modal">Cerrar</button>
                        <button type="button"
                                class="botonActualizar">Actualizar</button>
                    </div>
                </div>
                <!-- /Contenido del modal -->
            </div>
        </div>
        <!-- /Modal -->
        @endforeach

    </table>

</div>
@endsection


<!--
action="adminActualizarUsuario"
<table>
<tr>
<input type="hidden"value="{{ $data->id }}" />
</tr>
<tr>
<td>
Nombre:
</td>
<td>
<input type="text" value="{{ $data->name }}" />
</td>
</tr>
<tr>
<td>
Email:
</td>
<td>
<input type="text" value="{{ $data->email }}" />
</td>
</tr>
</table>
-->