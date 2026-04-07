<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
}
