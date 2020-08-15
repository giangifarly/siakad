<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    protected $table = "users";

    //protected $guarded = ['id_user'];

    //protected $fillable = [
    //    'username', 'name', 'email', 'password', 'level','id_siswa'
    //];


    public function siswa()
    {
        return $this->belongsTo('App\Siswa');
    }
    public function admin()
    {
        return $this->belongsTo('App\Admin');
    }

    public function editSiswa()
    {
        return $this->belongsToMany('App\Siswa');
    }
}

