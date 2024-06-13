<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;

class PembelajaranController extends Controller
{
	public function index3()
	{
		// mengambil data dari table Pembelajaran
		$pembelajaran = DB::table('pembelajaran')->get();

		// mengirim data Pembelajaran ke view index
		return view('index3', ['pembelajaran' => $pembelajaran]);
	}




	public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

		// mengambil data dari table pembelajaran sesuai pencarian data
		$pembelajaran = DB::table('pembelajaran')
			->where('Hari', 'like', "%" . $cari . "%")
			->paginate();

		// mengirim data pembelajaran ke view index
		return view('index3', ['pembelajaran' => $pembelajaran]);
	}






	// method untuk MENAMPILKAN VIEW form tambah Pembelajaran
	public function tambah()
	{
		$ID_Mapel = DB::table('Mapel')->get();

		// memanggil view tambah
		return view('tambah3', ['ID_Mapel' => $ID_Mapel]);

	
      $Nama_Guru  = DB::table('Guru')->get();

	  return view('tambah3', ['Nama_Guru' => $Nama_Guru]);
	}	
		


	



	
	// method untuk INSERT DATA ke table Pembelajaran
	public function store(Request $request)
	{
		// insert data ke table Pembelajaran
		DB::table('pembelajaran')->insert([
			'ID_Mapel' => $request->ID_Mapel,
			'Guru_Pengajar' => $request->Guru_Pengajar,
			'Jam_Mulai' => $request->Jam_Mulai,
			'Jam_Selesai' => $request->Jam_Selesai,
			'Hari' => $request->Hari
		]);
		// alihkan halaman ke halaman Pembelajaran
		return redirect('/pembelajaran');
	}




	// method untuk UBAH data Pembelajaran
	public function ubah($id)
	{
		// mengambil data Pembelajaran berdasarkan id yang dipilih
		$pembelajaran = DB::table('pembelajaran')->where('ID_Mapel', $id)->get();
		// passing data Pembelajaran yang didapat ke view ubah.blade.php
		return view('ubah3', ['pembelajaran' => $pembelajaran]);
	}


	// UPDATE data Pembelajaran
	public function update(Request $request)
	{
		// update data Pembelajaran
		DB::table('pembelajaran')->where('ID_Mapel', $request->id)->update([
			'ID_Mapel' => $request->ID_Mapel,
			'Guru_Pengajar' => $request->Guru_Pengajar,
			'Jam_Mulai' => $request->Jam_Mulai,
			'Jam_Selesai' => $request->Jam_Selesai,
			'Hari' => $request->Hari
		]);
		// alihkan halaman ke halaman Pembelajaran
		return redirect('/pembelajaran');
	}

	// method untuk hapus data pegawai
	public function hapus($id)
	{
		// MENGHAPUS data Pembelajaran berdasarkan id yang dipilih
		DB::table('pembelajaran')->where('ID_Mapel', $id)->delete();

		// alihkan halaman ke halaman Pembelajaran
		return redirect('/pembelajaran');
	}

	public function viewPdf()
    {
        $pembelajaran = DB::table('pembelajaran')->get();
        $pdf = Pdf::loadView('table3', ["pembelajaran" => $pembelajaran]);
        return $pdf->stream('data_pembelajaran.pdf');
    }
}
