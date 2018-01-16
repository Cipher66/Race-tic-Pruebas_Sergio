<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\UserFormRequest;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\User;

class GestionarUsuariosController extends Controller
{

    //
    /*public function ver($request, $user){
        $usuarios = DB::table('users')->get();
        if($user -> role === 'admin'){
            return redirect()->intended('/adminVerUsuarios', ['usuarios' => $usuarios]);
        }
        /*return redirect()->intended('/login');*/
    /*return redirect('/login');
}*/

    public function ver()
    {
        $usuarios = DB::table('users')->get();
        return view('admin', ['usuarios' => $usuarios]);
    }

    public function eliminar($id)
    {
        DB::table('users')->where('id', '=', $id)->delete();
        return redirect('/adminVerUsuarios');
    }

    public function editar($id)
    {
        $data = User::find($id);
        return view('/editarUsuarios', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = User::find($id);
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->update();

        return \redirect('/adminVerUsuarios');
    }

}

/*
 * https://www.youtube.com/watch?v=cQ3FyGoCvEU