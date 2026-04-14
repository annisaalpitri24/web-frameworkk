<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DosenController extends Controller
{
     public function insertDosen()
    {
        $query = DB::table('dosens')->insert(
            [
            'nik'        => '1978098098689',
            'nama'       => 'M Rasyid',
            'email'      => 'rasyid@gmail.com',
            'no_telp'    => '0812687687',
            'prodi'      => 'Manajemen Informatika',
            'alamat'     => 'Jl. Rasuna Said no. 5 Padang',
            'created_at' => now(),
            'updated_at' => now(),
        ]
        );

        dd($query); 
    }
    public function insertBanyakDosen()
    {
        $query=DB::table('dosens')->insert(
            [
                [
                    'nik'        => '19800089212',
                    'nama'       => 'M Yazid',
                    'email'      => 'yazid@gmail.com',
                    'no_telp'    => '081378979',
                    'prodi'      => 'TRPL',
                    'alamat'     => 'Jl. Sutomo no. 1 Padang',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'nik'        => '19828887678',
                    'nama'       => 'Deni',
                    'email'      => 'deni@gmail.com',
                    'no_telp'    => '0812887888',
                    'prodi'      => 'TRPL',
                    'alamat'     => 'Jl. M Hatta no. 15 Padang',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]
        );
        dd($query);
    }
    public function updateDosen()
    {
        $query=DB::table('dosens')
            ->where('nama', 'Deni')
            ->update(
            [
                'no_telp'    => '0811000001',
                'prodi'      => 'Teknik Komputer',
                'updated_at' => now(),
            ]
        );
        dd($query);
    }
    public function updateWhereDosen()
    {
        $query=DB::table('dosens')
            ->where('nama', 'Deni')
            ->where('prodi', '<>', 'TRPL')
            ->update(
            [
                'email'      => 'deni@mi_ti.ac.id',
                'updated_at' => now(),
            ]
        );
        dd($query);
    }
    public function updateOrInsert()
    {
        $query=DB::table('dosens')->updateOrInsert(
            [
                'nik'        => '1978092800001',
            ],
            [
                'nama'       => 'Steve Job',
                'email'      => 'steve@gmail.com',
                'no_telp'    => '08128874444',
                'prodi'      => 'TRPL',
                'alamat'     => 'Jl. M Hatta no. 1 Padang',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        dd($query);
    }
    public function deleteDosen()
    {
        $query=DB::table('dosens')
            ->where('nik', '1978092800001')
            ->delete();
        dd($query);
    }
    public function get()
    {
        $query=DB::table('dosens')->get();

        dd($query);
    }
    public function getTampil()
    {
        $query=DB::table('dosens')->get();

        echo $query[0]->id . '<br />';
        echo $query[0]->nik . '<br />';
        echo $query[0]->nama . '<br />';
        echo $query[0]->email . '<br />';
        echo $query[0]->alamat;
    }
    public function getView()
    {
        $query=DB::table('dosens')->get();
        return view('akademik.dosen', ['dosens' => $query]);
    }
    public function getWhere()
    {
        $query=DB::table('dosens')
            ->where('prodi', 'TRPL')
            ->orderBy('nama', 'desc')
            ->get();
            
        return view('akademik.dosen', ['dosens' => $query]);
    }
    public function selectDosen()
    {
        $query=DB::table('dosens')
            ->select('nik', 'nama as nama_dosen')
            ->get();
            
        dd($query);
    }
    public function take()
    {
        $query = DB::table('dosens')
            ->orderBy('nama', 'asc')
            ->skip(1)
            ->take(2)
            ->get();

        return view('akademik.dosen', ['dosens' => $query]);
    }
    public function first()
    {
        $query = DB::table('dosens')
            ->where('nama', 'Deni')
            ->first();

        return view('akademik.dosen', ['dosens' => [$query]]);
    }
    public function find()
    {
        $query = DB::table('dosens')
            ->find(1);

        return view('akademik.dosen', ['dosens' => [$query]]);
    }
    public function raw()
    {
        $query=DB::table('dosens')
            ->selectRaw('count(*) as total_dosen')
            ->get();

        echo $query[0]->total_dosen;
    }
    public function cekObjek()
    {
        $mahasiswa = new Mahasiswa();
        dd($mahasiswa);
    }

    public function insert()
    {
        $mahasiswa = new Mahasiswa();
        $mahasiswa->nim = '20210298';
        $mahasiswa->nama_lengkap = 'Steve job';
        $mahasiswa->tempat_lahir = 'Solok';
        $mahasiswa->tgl_lahir = '1970-09-05';
        $mahasiswa->email = 'steve@apple.com';
        $mahasiswa->prodi = 'TRPL';
        $mahasiswa->alamat = 'Jl. sutomo no.11 Solok';
        $mahasiswa->save();

        dd($mahasiswa);
    }
}
