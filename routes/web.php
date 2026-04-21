<?php


use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

use function Pest\Laravel\get;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mahasiswa',[MahasiswaController::class,'index']);

Route::get('/dosen',[DosenController::class,'index']);

Route::get('/insert-sql', [MahasiswaController::class,'insertSql']);
Route::get('/insert-prepared', [MahasiswaController::class,'insertPrepared']);
Route::get('/insert-binding', [MahasiswaController::class,'insertBinding']);
Route::get('/update', [MahasiswaController::class,'update']);
Route::get('/delete', [MahasiswaController::class,'delete']);
Route::get('/select', [MahasiswaController::class,'select']);
Route::get('/select-tampil', [MahasiswaController::class,'selectTampil']);
Route::get('/select-view', [MahasiswaController::class,'selectView']);
Route::get('/select-where', [MahasiswaController::class,'selectWhere']);
Route::get('/statement', [MahasiswaController::class,'statement']);


Route::get('/insert-dosen', [DosenController::class, 'insertDosen']);
Route::get('/insert-banyak-dosen', [DosenController::class, 'insertBanyakDosen']);
Route::get('/update-dosen', [DosenController::class, 'updateDosen']);
Route::get('/update-where-dosen', [DosenController::class, 'updateWhereDosen']);
Route::get('/update-or-insert', [DosenController::class, 'updateOrInsert']);
Route::get('/delete-dosen', [DosenController::class, 'deleteDosen']);
Route::get('/get', [DosenController::class, 'get']);
Route::get('/get-tampil', [DosenController::class, 'getTampil']);
Route::get('/get-view', [DosenController::class, 'getView']);
Route::get('/get-where', [DosenController::class, 'getWhere']);
Route::get('/select-dosen', [DosenController::class, 'selectDosen']);
Route::get('/take', [DosenController::class, 'take']);
Route::get('/first', [DosenController::class, 'first']);
Route::get('/find', [DosenController::class, 'find']);
Route::get('/raw', [DosenController::class, 'raw']);

Route::get('/cek-objek', [MahasiswaController::class, 'cekObjek']);
Route::get('/insert', [MahasiswaController::class, 'insert']);
Route::get('/mass-assignment', [MahasiswaController::class, 'massAssignment']);

Route::get('/updates', [MahasiswaController::class, 'updates']);
Route::get('/update-where', [MahasiswaController::class, 'updateWhere']);
Route::get('/mass-update', [MahasiswaController::class, 'massUpdate']);

Route::get('/delete', [MahasiswaController::class, 'deleted']);
Route::get('/destroy', [MahasiswaController::class, 'destroy']);
Route::get('/mass-delete', [MahasiswaController::class, 'massDelete']);

Route::get('/all', [MahasiswaController::class, 'all']);
Route::get('/all-view', [MahasiswaController::class, 'allView']);
Route::get('/get-where', [MahasiswaController::class, 'getWhere']);
Route::get('/test-where', [MahasiswaController::class, 'testWhere']);
Route::get('/first', [MahasiswaController::class, 'first']);
Route::get('/find', [MahasiswaController::class, 'find']);
Route::get('/latest', [MahasiswaController::class, 'latest']);
Route::get('/limit', [MahasiswaController::class, 'limit']);
Route::get('/skip-take', [MahasiswaController::class, 'skipTake']);

// Rute Soft Deletes
Route::get('/soft-delete', [MahasiswaController::class, 'softDelete']);
Route::get('/with-trashed', [MahasiswaController::class, 'withTrashed']);
Route::get('/restore', [MahasiswaController::class, 'restore']);
Route::get('/force-delete', [MahasiswaController::class, 'forceDelete']);

Route::get('/mhs', [MahasiswaController::class, 'indexs']);

//
//Route::get('/home', function(){
//    echo "Halaman Home <br>";
//    echo "baris Kedua";
//
//});
//
//Route :: get('/mahasiswa/ti/udin', function(){
//    echo "Selamat Datang udin";
//});
//
//Route::get('/mahasiswa/{nama}', function($nama){
//    return "Selamat Datang $nama";
//});
//
//Route::get('/mahasiswa/{nama}/{nim}', function($nama, $nim){
//    return "Selamat Datang $nama, Nim: $nim";
//});
//
////Route::get('/dosen/{nama?}/{nip?}', function($nama="", $nip=""){
//  //  return "Selamat Datang $nama, Nip: $nip";
////});
//
//Route::redirect('/home','/');
//
////Route::fallback(function(){
//  //  return "halaman tidak ditemukan";
////});
//
//Route::get('/mahasiswa', function(){
//    $arrMhs = 
//    ['mhs1' => 'Mark Zaky',
//    'mhs2' => 'Firyal najla'];
//
//    //return view('akademik.mahasiswa',$arrMhs);
//    return view('akademik.mahasiswa')->with($arrMhs);
//});
//
//Route ::get('/mahasiswa', function(){
//    $nama='Taylor Otwell';
//    $nim='2022180001';
//    $total_nilai =0;
//    return view('akademik.nilai_mahasiswa',compact('nama','nim','total_nilai'));
//});
//
//Route::get('/perulangan',function(){
//    return view('akademik.perulangan');
//});
//
//Route ::get('/perulangan', function(){
//    $nama='Bill Gates';
//    $nim='2022180001';
//    $total_nilai =[80,70,20];
//    return view('akademik.perulangan',compact('nama','nim','total_nilai'));
//});
//
//Route ::get('/perulangan', function(){
//    $nama='Bill Gates';
//    $nim='2022180001';
//    $total_nilai =[80,70,20,60,45];
//    return view('akademik.perulangan',compact('nama','nim','total_nilai'));
//});
//
//Route::get('/mahasiswa', function(){
//    $arrMhs=['Bill gates','Linus Benedict','Annisa Alpitri','Taylor Otwell',
//    'Elon Musk', 'M.Syafiq husein'];
//    return view('akademik.mahasiswa',['mhs'=>$arrMhs]);
//});
//
//Route::get('/dosen', function(){
//    $arrDosen=['Ronal hadi','Deni S','Fazrol R','Deddy P',
//    'Ervan A', 'Cipto P'];
//
//    return view('akademik.dosen',['dosen'=>$arrDosen]);
//});
////Route::get('/prodi', function (){
//  //  return view('akademik.prodi');
////});
//
////Route::get('/pnp/jurusan/ti/prodi', function (){
//  //  return view('akademik.prodi');
////})->name('prodi');
//
Route::get('/pnp/{jurusan}/{prodi}', function ($jurusan,$prodi){
    $data=[$jurusan,$prodi];
   return view('akademik.prodi')->with('data',$data);
})->name('prodi');

