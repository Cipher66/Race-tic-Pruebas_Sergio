<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class GestionarUsuariosController extends Controller
{
    //
    public function eliminar(){
        $usuarios = DB::table('users')->get();
        return view('admin', ['usuarios' => $usuarios]);
    }

    public function redireccionar($id){
        $borrar = DB::table('users')->where('id', '=', $id)->delete();
        return redirect('/adminVerUsuarios');
    }
}
