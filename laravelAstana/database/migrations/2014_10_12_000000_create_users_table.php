<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nama_depan');
            $table->string('nama_belakang');
            $table->string('provinsi');
            $table->string('kota');
            $table->string('jenis_kelamin');
            $table->timestamp('tanggal_lahir');
            $table->string('kode_pos');
            $table->string('alamat');
            $table->string('telepon');
            $table->string('fax');
            $table->timestamp('tanggal_bekerja');
            $table->timestamp('tanggal_gajian');
            $table->string('status');
            $table->string('departemen');
            $table->string('posisi');
            $table->decimal('gaji', 15, 2);
            $table->string('pendidikan_terakhir')->nullable();

            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();            
            $table->string('profile_photo_path', 2048)->nullable();
            $table->timestamps();
            $table->softDeletes();
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
    }
};
