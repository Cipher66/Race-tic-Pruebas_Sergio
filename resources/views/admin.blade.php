@extends('layouts.app')

    <link href="{{ asset('../css/estiloshome.css') }}" rel="stylesheet" type="text/css" >
<link href="{{ asset('../css/app.css') }}" rel="stylesheet" type="text/css" >

@section('content')

    <div style="text-align:center;">
        <p><h2><u>Panel de administración de usuarios</u></h2></p>
    </div>

<div>

    <table align="center" id="tabla">
        <tr class="cabecera">
            <th>Nombre</th>
            <th>Correo electrónico</th>
            <th>Eliminar</th>
            <th>Editar</th>
            <th>Confirmado</th>
        </tr>
        @foreach($usuarios as $key => $data)
        <tr>
            <td class="contenidoTabla">{{ $data->name }}</td>
            <td class="contenidoTabla">{{ $data->email }}</td>
            <td class="contenidoTabla"><a href="adminEliminarUsuario/{{ $data -> id }}" class="botonEliminar">Eliminar</a></td>
            <td class="contenidoTabla"><a href="{{ url('/adminEditarUsuario/'.$data->id) }}" class="botonEditar">Editar</a></td>
            <td class="contenidoTabla" id="confirmacion">
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