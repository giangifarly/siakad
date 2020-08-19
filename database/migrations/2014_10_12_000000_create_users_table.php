<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_kelamin',15);
            $table->string('telepon',15);
            $table->timestamps();
        });

        Schema::create('program', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_program');
        });

        Schema::create('sekolah', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_sekolah');
            $table->string('telp_sekolah');
            $table->string('email_sekolah');
            $table->text('alamat_sekolah');
        });

        Schema::create('siswa', function (Blueprint $table) {
            $table->id('id');
            $table->string('jenis_kelamin',11)->nullable();
            $table->string('tempat_lahir',50)->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('orang_tua')->nullable();
            $table->string('alamat')->nullable();
            $table->string('telepon',15)->nullable();
            $table->integer('tahun_masuk')->nullable();
            $table->string('program',20)->nullable();

            $table->timestamps();
        });

        Schema::create('users', function (Blueprint $table) {
            $table->id('id');
            $table->string('username');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('level')->nullable();
            $table->unsignedBigInteger('id_siswa')->nullable();
            $table->rememberToken();
            $table->timestamps();


            $table->bigInteger('siswa_id')->unsigned()->nullable();
            $table->bigInteger('admin_id')->unsigned()->nullable();
            $table->foreign('siswa_id')->references('id')->on('siswa')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('admin_id')->references('id')->on('admin')->onDelete('cascade')->onUpdate('cascade');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('siswa');
        Schema::dropIfExists('admin');
    }
}
