<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //\App\Models\Mahasiswa::create([
        //    'nim'=>'2401092002',
        //    'nama_lengkap'=>'Annisa Alpitri',
        //    'tempat_lahir'=>'Sei Durian',
        //    'tgl_lahir'=> '2005-12-26',
        //    'email'=>'admin@gmail.com',
        //    'prodi'=>'MI',
        //    'alamat'=>'Padang'
        //]);
        \App\Models\Mahasiswa::factory(10)->create();
    }
}
