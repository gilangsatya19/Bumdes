<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        DB::table('users')->insert([
            'nama' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('adminadmin'),
        ]);

        DB::table('jurnal_umum')->insert([
            'tanggal' => '19/04/2001',
            'bukti_pembayaran' => '8eafcf84bcceec78873f53f928c910be.jpg',
            'user_id' => '1',
        ]);

        DB::table('nama_akuns')->insert([
            'nama' => 'Aset',
            'kode_rekening' => '1000',
            
        ]);
    }
}
