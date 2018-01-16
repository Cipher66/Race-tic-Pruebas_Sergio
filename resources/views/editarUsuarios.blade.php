@extends('layouts.app')
    <link href="{{ asset('../css/estiloshome.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('../css/app.css') }}" rel="stylesheet" type="text/css" >
@section('content')
    <table>
        <form method="post" action="{{ url('/adminActualizarUsuario/'.$data->id) }}">
            {{ method_field('PUT') }}
            {{ csrf_field() }}
            <div id="tabla">
                <table align="center">
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Actualizar</th>
                    <tr>
                        <td><input type="text" name='name' value="{{ $data->name }}"/></td>
                        <td><input type="text" name='email' value="{{ $data->email }}"/></td>
                        <td><input type="submit" value="Actualizar perfil" /></td>
                    </tr>
                </table>
            </div>
        </form>
    </table>
@endsection