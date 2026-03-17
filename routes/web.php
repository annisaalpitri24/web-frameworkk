<?php

use Illuminate\Support\Facades\Route;

use function Pest\Laravel\get;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function(){
    echo "Halaman Home <br>";
    echo "baris Kedua";

});

Route :: get('/mahasiswa/ti/udin', function(){
    echo "Selamat Datang udin";
});

Route::get('/mahasiswa/{nama}', function($nama){
    return "Selamat Datang $nama";
});

Route::get('/mahasiswa/{nama}/{nim}', function($nama, $nim){
    return "Selamat Datang $nama, Nim: $nim";
});

Route::get('/dosen/{nama?}/{nip?}', function($nama="", $nip=""){
    return "Selamat Datang $nama, Nip: $nip";
});

Route::redirect('/home','/');

//Route::fallback(function(){
  //  return "halaman tidak ditemukan";
//});

Route::get('/mahasiswa', function(){
    $arrMhs = 
    ['mhs1' => 'Mark Zaky',
    'mhs2' => 'Firyal najla'];

    //return view('akademik.mahasiswa',$arrMhs);
    return view('akademik.mahasiswa')->with($arrMhs);
});

Route ::get('/mahasiswa', function(){
    $nama='Taylor Otwell';
    $nim='2022180001';
    $total_nilai =0;
    return view('akademik.nilai_mahasiswa',compact('nama','nim','total_nilai'));
});

Route::get('/perulangan',function(){
    return view('akademik.perulangan');
});

Route ::get('/perulangan', function(){
    $nama='Bill Gates';
    $nim='2022180001';
    $total_nilai =[80,70,20];
    return view('akademik.perulangan',compact('nama','nim','total_nilai'));
});

Route ::get('/perulangan', function(){
    $nama='Bill Gates';
    $nim='2022180001';
    $total_nilai =[80,70,20,60,45];
    return view('akademik.perulangan',compact('nama','nim','total_nilai'));
});

Route::get('/mahasiswa', function(){
    $arrMhs=['Bill gates','Linus Benedict','Annisa Alpitri','Taylor Otwell',
    'Elon Musk', 'M.Syafiq husein'];
    return view('akademik.mahasiswa',['mhs'=>$arrMhs]);
});

Route::get('/dosen', function(){
    $arrDosen=['Ronal hadi','Deni S','Fazrol R','Deddy P',
    'Ervan A', 'Cipto P'];
    return view('akademik.dosen',['mhs'=>$arrDosen]);
});

Route::get('/prodi', function (){
    return view('akademik.prodi');
});