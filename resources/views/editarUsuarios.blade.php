@extends('layouts.app')
<link href="{{ asset('../css/estiloshome.css') }}" rel="stylesheet" type="text/css" >
@section('content')
    <table>
        <form method="post" action="{{ url('/adminActualizarUsuario/'.$data->id) }}">
            {{ method_field('PUT') }}
            {{ csrf_field() }}
            <th>Nombre</th>
            <th>Email</th>
            <th>Actualizar</th>
            <tr>
                <input type="text" name='name' value="{{ $data->name }}"/>
                <input type="text" name='email' value="{{ $data->email }}"/>
                <input type="submit" value="Actualizar perfil" />
            </tr>
        </form>
    </table>
@endsection