<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupplier extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplier', function (Blueprint $table) {
            $table->id();
            $table->string('nama');            
            $table->string('NPWP');            
            $table->string('provinsi');
            $table->string('kota'); 
            $table->string('alamat');                      
            $table->string('kode_pos'); 
            $table->string('email')->unique();
            $table->string('telepon');
            $table->string('fax');        
            $table->string('status_pajak');
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
        Schema::dropIfExists('supplier');
    }
}
