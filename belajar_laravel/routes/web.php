<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Models\User;

use App\Http\Controllers\GuruController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\PembelajaranController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('login');
});

// metode nya get lalu masukkan namespace AuthController 
// attribute name merupakan penamaan dari route yang kita buat
// kita tinggal panggil fungsi route(name) pada layout atau controller
Route::get('login', [AuthController::class,'index'])->name('login');
Route::get('register', [AuthController::class,'register'])->name('register');
Route::post('proses_login', [AuthController::class,'proses_login'])->name('proses_login');
Route::get('logout', [AuthController::class,'logout'])->name('logout');

Route::post('proses_register',[AuthController::class,'proses_register'])->name('proses_register');

// kita atur juga untuk middleware menggunakan group pada routing
// didalamnya terdapat group untuk mengecek kondisi login
// jika pengguna yang login merupakan admin maka akan diarahkan ke AdminController
// jika pengguna yang login merupakan user biasa maka akan diarahkan ke UserController
Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cek_login:admin']], function () {
        Route::resource('admin', AdminController::class);
    });
    Route::group(['middleware' => ['cek_login:user']], function () {
        Route::resource('user', UserController::class);
    });
});


//route CRUD TABEL Guru
Route::get('/guru', [GuruController::class, 'index']);
Route::get('/guru/cari', [GuruController::class, 'cari']);
Route::get('/guru/tambah', [GuruController::class, 'tambah']);
Route::post('/guru/store', [GuruController::class, 'store']);
Route::get('/guru/ubah/{id}', [GuruController::class, 'ubah']);
Route::post('/guru/update', [GuruController::class, 'update']);
Route::get('/guru/hapus/{id}', [GuruController::class, 'hapus']);


//route CRUD TABEL Mapel
Route::get('/mapel', [MapelController::class, 'index2']);
Route::get('/mapel/cari', [MapelController::class, 'cari']);
Route::get('/mapel/tambah', [MapelController::class, 'tambah']);
Route::post('/mapel/store', [MapelController::class, 'store']);
Route::get('/mapel/ubah/{id}', [MapelController::class, 'ubah']);
Route::post('/mapel/update', [MapelController::class, 'update']);
Route::get('/mapel/hapus/{id}', [MapelController::class, 'hapus']);


//route CRUD TABEL Pembelajaran
Route::get('/pembelajaran', [PembelajaranController::class, 'index3']);
Route::get('/pembelajaran/cari', [PembelajaranController::class, 'cari']);
Route::get('/pembelajaran/tambah', [PembelajaranController::class, 'tambah']);
Route::post('/pembelajaran/store', [PembelajaranController::class, 'store']);
Route::get('/pembelajaran/ubah/{id}', [PembelajaranController::class, 'ubah']);
Route::post('/pembelajaran/update', [PembelajaranController::class, 'update']);
Route::get('/pembelajaran/hapus/{id}', [PembelajaranController::class, 'hapus']);


//USER
Route::get('User/home',function(){return view('User/home');});
Route::get('User/about',function(){return view('User/about');});
Route::get('User/abouthome',function(){return view('User/abouthome');});
Route::get('User/contact',function(){return view('User/contact');});
Route::get('User/index',[UserController::class,'guru']);
Route::get('User/index2',[UserController::class,'mapel']);
Route::get('User/index3',[UserController::class,'pembelajaran']);                                                             

Route::get('User/index/cari', [UserController::class, 'cari']);
Route::get('User/index2/carimapel', [UserController::class, 'carimapel']);
Route::get('User/index3/caripemb', [UserController::class, 'caripemb']);





Route::get('/home',function(){return view('home');});
Route::get('/abouthome',function(){return view('abouthome');});
Route::get('/about',function(){return view('about');});
Route::get('/contact',function(){return view('contact');});

Route::get('table', [GuruController::class, 'viewPdf']);
Route::get('table2', [MapelController::class, 'viewPdf']);
Route::get('table3', [PembelajaranController::class, 'viewPdf']);