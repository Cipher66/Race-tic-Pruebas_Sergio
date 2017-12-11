<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use UserFormRequest;

class GestionarUsuariosController extends Controller
{
    //
    public function eliminar(){
        $usuarios = DB::table('users')->get();
        return view('admin', ['usuarios' => $usuarios]);
    }

    public function redireccionar($id){
        DB::table('users')->where('id', '=', $id)->delete();
        return redirect('/adminVerUsuarios');
    }
    /*public function modificar($id){
        DB::table('users')->where('id', '=', $id)->update();
        return redirect('/adminVerUsuarios');
    }*/
    public function actualizar($id, UserFormRequest $request){
        $user = User::findOrFail($id);
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->save();
        return \Redirect::route('users.edit', [$user->id])->with('message', 'User has been updated!');
    }
}
