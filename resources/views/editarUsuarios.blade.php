@extends('layouts.app')

@section('content')
    @foreach($usuarios as $key => $data)
        <form method="post" action="adminEditarUsuario">
            <input type="hidden" name="id" value="{{ $data->id }}"/>
            <strong>Nombre:</strong>
            <input type="text" name="name" value="{{ $data->name }}"/>
            <strong>Email:</strong>
            <input type="text" name="email" value="{{ $data->email }}"/>
            <input type="submit" value="Actualizar perfil">
        </form>
    @endforeach
@endsection
<!-- ($usuarios as $key => $data)-->
<!--

-->