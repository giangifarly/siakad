<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = "admin";

    public function users()
    {
        return $this->hasMany('App\Login');
    }
}
