<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table("users")
        ->insert([
            'nama_depan' => "superadmin",
            'nama_belakang' => "superadmin",
            'provinsi' => "JAWA TIMUR",
            'kota' => "KOTA SURABAYA",
            'jenis_kelamin' => "laki-laki",
            'tanggal_lahir' => Carbon::now(),
            'kode_pos' => "60112",
            'alamat' => "laki-laki",
            'telepon' => "laki-laki",
            'fax' => "laki-laki",            
            'tanggal_bekerja' => Carbon::now(),
            'tanggal_gajian' => Carbon::now(),
            'status' => "aktif",
            'departemen' => "eksekutif",
            'posisi' => "manajer",
            'gaji' => "1000000",            

            'email' => "superadmin@example.com",
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make("12345678"),            
        ]);
    }
}
