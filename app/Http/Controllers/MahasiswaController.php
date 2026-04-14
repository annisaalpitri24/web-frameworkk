<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
     public function index()
    {
        return "Ini adalah method index di MahasiswaController";
    }
     public function insertSql()
    {
        $query = DB::insert("INSERT INTO students(nim,nama_lengkap,tempat_lahir,
        tgl_lahir,email,prodi,alamat,created_at,updated_at) VALUES ('2401092002',
        'Annisa Alpitri','Sawahlunto','2005-12-26','annisa@linux.org','MI',
        'Jl. Sudirman no.10 Padang',now(),now())");
    }
    public function insertPrepared()
{
    $query=DB::insert("INSERT INTO students(nim,nama_lengkap,tempat_lahir,
    tgl_lahir,email,prodi,alamat,created_at,updated_at) VALUES 
    (?,?,?,?,?,?,?,?,?)",['2022090908','Taylor Otwel','Limau Manis',
    '1971-08-12','taylor@laravel.com','MI','Jl. M Hatta no.1 Padang',now(),
    now()]);
}
public function insertBinding()
{
    $query=DB::insert("INSERT INTO students(nim,nama_lengkap,tempat_lahir,
    tgl_lahir,email,prodi,alamat,created_at,updated_at) VALUES (:nim,
    :nama_lengkap,:tempat_lahir,:tgl_lahir,:email,:prodi,:alamat,:created_at,
    :updated_at)",
    [
        'nim'=>'2022090908',
        'nama_lengkap' =>'Bill Gates',
        'tempat_lahir' =>'Payakumbuh',
        'tgl_lahir'=>'1963-05-1',
        'email'=>'bill@microsoft.com',
        'prodi'=>'MI',
        'alamat'=>'Jl. M Yamin no.1 Padang',
        'created_at'=>now(),
        'updated_at'=>now()
    ]);
}
public function update()
{
    $query=DB::update("UPDATE students SET tempat_lahir = 'Seattle 
    Washhington US' WHERE nama_lengkap=?",['Bill Gates']);
}
public function delete()
{
    $query=DB::delete("DELETE FROM students WHERE nama_lengkap=?",['Bill 
    Gates']);
}
public function select()
{
    $query=DB::select("SELECT * FROM students");
    dd($query);
}
public function selectTampil()
{
    $query=DB::select("SELECT * FROM students");
    echo ($query[0]->id) . "<br />";
    echo ($query[0]->nim) . "<br />";
    echo ($query[0]->nama_lengkap) . "<br />";
    echo ($query[0]->email) . "<br />";
    echo ($query[0]->alamat);
}
public function selectView()
    {
        $query=DB::select("SELECT * FROM students");
        return view('akademik.mahasiswa',['mahasiswas'=>$query]);
    }

    public function selectWhere()
    {
        $query=DB::select("SELECT * FROM students WHERE prodi=? ORDER BY nim 
        ASC",['MI']);
        return view('akademik.mahasiswa',['mahasiswas'=>$query]);
    }

    public function statement()
    {
        $query=DB::statement("TRUNCATE ");
        return ('Tabel mahasiswa sudah kosong');
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
    public function massAssignment()
    {
        $mahasiswa=Mahasiswa::create(
            [
                'nim'=>'202007890',
                'nama_lengkap'=>'M. Yazid',
                'tempat_lahir'=>'Padang',
                'tgl_lahir'=>'2011-07-03',
                'email'=>'yazid@gmail.com',
                'prodi'=>'MI',
                'alamat'=>'Padang',
            ]
        );
        dump($mahasiswa);

        $mahasiswa1=Mahasiswa::create(
            [
                'nim'=>'202007891',
                'nama_lengkap'=>'M. Rasyid',
                'tempat_lahir'=>'Padang',
                'tgl_lahir'=>'2015-05-12',
                'email'=>'rasyid@gmail.com',
                'prodi'=>'TRPL',
                'alamat'=>'Padang',
            ]
        );
        dump($mahasiswa1);
    }
    public function updates()
    {
        $mahasiswa = Mahasiswa::find(1);
        $mahasiswa->tempat_lahir = 'Padang';
        $mahasiswa->tgl_lahir = '2001-01-01';
        $mahasiswa->save();

        dump($mahasiswa);
    }
}
