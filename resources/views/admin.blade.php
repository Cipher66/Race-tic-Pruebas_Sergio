@extends('layouts.app')



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
            <td><button type="button"
                    class="botonEditar"
                    data-toggle="modal"
                    data-target="#myModal-{{ $data->id }}">Editar</button></td>
            <td id="confirmacion">
                @if($data -> verified == 0)
                    <img src="../images/x_no.png" />
                @else
                    <img src="../images/tick_si.png" />
                @endif

            </td>
        </tr>
        <!-- Modal -->
        <div class="modal fade" id="myModal-{{ $data->id }}" role="dialog">
            <div class="modal-dialog">
                <!-- Contenido del modal -->
                <form method="post"  action="/adminActualizarUsuario">
                value="{{ csrf_field() }}"
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button"
                                class="close"
                                data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Editar Usuario</h4>
                    </div>
                    <div class="modal-body">
                        <p>Some text in the modal</p>
                        Nombre: <input type="text" name="name" value="{{ $data-> name }}"/>
                        Correo electrónico: <input type="text" name="email" value="{{ $data-> email }}"/>
                    </div>
                    <div class="modal-footer">
                        <button type="button"
                                class="botonCerrar"
                                data-dismiss="modal">Cerrar</button>
                        <input type="submit" value="Actualizar">
                    </div>

                </div>
                </form>
                <!-- /Contenido del modal -->
            </div>
        </div>
        <!-- /Modal -->
        @endforeach

    </table>

</div>
@endsection