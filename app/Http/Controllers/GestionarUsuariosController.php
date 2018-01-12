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

    public function ver(){
        $usuarios = DB::table('users')->get();
        return view('admin', ['usuarios' => $usuarios]);
    }

    public function eliminar($id){
        DB::table('users')->where('id', '=', $id)->delete();
        return redirect('/adminVerUsuarios');
    }

    public function editar($id){
        $user = User::findOrFail($id);
        return view($this->path.'.edit',compact('user'));
    }



    public function update($id){
      /*echo "hola";
      print_r($data = Input::all());*/
        $user = User::find($id);

        $data = Input::all();

        if ($user -> isValid($data)){

            $user -> fill($data);
            $user -> save();

        }
        return Redirect::route('/adminVerUsuarios', array($user->id));
    }












    /*public function update($id){

        $id = $request->get('id');
        $name = $request->get('name');
        $email = $request->get('email');


        DB::table('users')->where('id', '=', $id)->update(["name"=>$name, "email"=>$email]);
        return redirect('/adminVerUsuarios');

    }*/


    /*public function update($id){
        $user = User::find($id, $request);
        $user -> name = $request -> name;
        $user -> email = $request -> email;
        $user ->save();
        return \redirect('adminVerUsuarios');
    }*/




    /*public function update($id, UserFormRequest $request){
        $user = User::findOrFail($id);
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->save();
        return \Redirect::route('users.edit', [$user->id])->with('message', 'User has been updated!');
    }*/
}


/*
 *
 *redireccionar
 * */
























































    /*
     return view('admin', ['usuarios' => $usuarios]);
     */

    /*public function editar($id){
        try {
            $user = DB::table('users')->where("id", "=", $id)->get();
            return redirect("/adminVerUsuarios")->with('user', $user);
        }
        catch (ModelNotFoundException $err) {

        }
    }*/
    /*public function actualizar(Request $request){
        //print_r($request);
        return "hola";
        /*try{
            $user = myform::findOrFail($id);
            /*DB::table('users')
                ->where('id', $id)
                ->update(['name'=>$request["name"], 'email'=>$request["email"]]);
            $user->save();
            $user -> id = $request["id"];
            $user -> name = $request["name"];
            $user -> email = $request["email"];
            $user -> save();
            return redirect("/adminVerUsuarios")->with('user', $user);
        }catch (ModelNotFoundException $err){

        }*/
    /*}*/




/*

}
*/