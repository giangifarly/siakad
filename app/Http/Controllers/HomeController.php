<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Login;
use App\Siswa;
use App\Admin;
use App\Http\Controllers\stdClass;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function siswa_edit($id)
    {
        $siswa = Login::with('siswa')->get()->find($id);
        return view('siswa_edit', ['siswa' => $siswa]);
    }

    public function siswa_edit_proses($id, Request $request)
    {
        $login = Login::find($id);
        $login = Login::where('id', $id)->first();
        $login->name = $request->name;
        $login->username = $request->username;
        $login->email = $request->email;
        if ($login->save()) {
            $siswa = Siswa::find($id);
            $siswa = Siswa::where('id', $login->siswa_id)->first();
            $siswa->jenis_kelamin   = $request->jenis_kelamin;
            $siswa->orang_tua       = $request->orang_tua;
            $siswa->alamat          = $request->alamat;
            $siswa->telepon         = $request->telepon;
            $siswa->tahun_masuk     = $request->tahun_masuk;
            $siswa->program         = $request->program;
        }$siswa->save();

        return redirect('/admin/siswa');
    }

    public function siswa_add()
    {
        return view('siswa_add');
    }
    public function siswa_add_proses(Request $request)
    {
        $password = $request->password;

        if ($password == null) {
            $password = 123456;
        } else {
            $password = $request->password;
        }

        $siswa = new Siswa();

        $siswa->jenis_kelamin   = $request->jenis_kelamin;
        $siswa->orang_tua       = $request->orang_tua;
        $siswa->alamat          = $request->alamat;
        $siswa->telepon         = $request->telepon;
        $siswa->tahun_masuk     = $request->tahun_masuk;
        $siswa->program         = $request->program;
        $siswa->save();

        $users = new Login();
        $users->name        = $request->name;
        $users->username    = $request->username;
        $users->email       = $request->email;
        $users->password    = bcrypt($password);
        $users->level       = 3;
        $users->siswa_id    = $siswa->id;
        $users->save();

        return redirect('/admin/siswa');
    }

    public function siswa()
    {

        $siswa = Login::with('siswa')->where('admin_id',null)->get();
        return view('siswa', ['siswa' => $siswa]);
    }

    public function siswa_hapus($id)
    {
        $login = Login::find($id);
        if ($login->delete()){
            $siswa = Siswa::find($id);
        }$siswa->delete();

        return redirect()->back();
    }
}
