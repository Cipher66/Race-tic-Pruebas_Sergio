<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Routing\Route;

class UserFormRequest extends Model
{
    //
    public function rules(){

        $user_id = \Route::current()->getParameter('users');
        return[
                'name' => 'required',
                'email' => 'unique:users|email|required',
        ];

    }
}
