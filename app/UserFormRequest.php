<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Routing\Route;

class UserFormRequest extends Model
{
    //
    public function rules(){

        // Grab the user ID from the URL
        $user_id = \Route::current()->getParameter('users');
        return[ 'name' => 'required',
                'email' => 'unique:users,email,'.$user_id.'|email|required',
        ];
    }
}
