<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    //
    public function index()
    {
        return view('User/home');
    }

    public function guru()
    {
        // mengambil data dari table guru
        $guru = DB::table('guru')->get();

        // mengirim data guru ke view index
        return view('User/index', ['guru' => $guru]);
    }

    public function mapel()
    {
        // mengambil data dari table mapel
        $mapel = DB::table('mapel')->get();

        // mengirim data mapel ke view index
        return view('User/index2', ['mapel' => $mapel]);
    }

    public function pembelajaran()
	{
		// mengambil data dari table Pembelajaran
		$pembelajaran = DB::table('pembelajaran')->get();

		// mengirim data Pembelajaran ke view index
		return view('User/index3', ['pembelajaran' => $pembelajaran]);
	}



    //PENCARIAN GURU
    
	public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

		// mengambil data dari table guru sesuai pencarian data
		$guru = DB::table('guru')
			->where('Nama_Guru', 'like', "%" . $cari . "%")
			->paginate();

		// mengirim data guru ke view index
		return view('User.index', ['guru' => $guru]);
	}

    public function carimapel(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

		// mengambil data dari table mapel sesuai pencarian data
		$mapel = DB::table('mapel')
			->where('Mata_Pelajaran', 'like', "%" . $cari . "%")
			->paginate();

		// mengirim data mapel ke view index
		return view('User.index2', ['mapel' => $mapel]);
	}

    public function caripemb(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

		// mengambil data dari table pembelajaran sesuai pencarian data
		$pembelajaran = DB::table('pembelajaran')
			->where('Hari', 'like', "%" . $cari . "%")
			->paginate();

		// mengirim data pembelajaran ke view index
		return view('User.index3', ['pembelajaran' => $pembelajaran]);
	}


    
}
