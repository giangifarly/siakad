<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Login;

use App\Http\Resources\UserResource as UserResource;

class UserController extends Controller
{
    public function getUser()
    {
        $users = Login::all()->where('admin_id',null);
        return UserResource::collection($users);
    }
}
