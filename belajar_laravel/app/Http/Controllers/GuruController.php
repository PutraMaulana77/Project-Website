<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;

class GuruController extends Controller
{

	public function index()
	{
		// mengambil data dari table guru
		$guru = DB::table('guru')->get();

		// mengirim data guru ke view index
		return view('index', ['guru' => $guru]);
	}






	public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

		// mengambil data dari table guru sesuai pencarian data
		$guru = DB::table('guru')
			->where('Nama_Guru', 'like', "%" . $cari . "%")
			->paginate();

		// mengirim data guru ke view index
		return view('index', ['guru' => $guru]);
	}





	// method untuk MENAMPILKAN VIEW form tambah guru
	public function tambah()
	{

		// memanggil view tambah
		return view('tambah');
	}


	// method untuk INSERT DATA ke table guru
	public function store(Request $request)
	{
		// insert data ke table guru
		DB::table('guru')->insert([
			'NUPTK' => $request->NUPTK,
			'Nama_Guru' => $request->Nama_Guru,
			'Bidang_Mengajar' => $request->Bidang_Mengajar,
			'Kontak' => $request->Kontak
		]);
		// alihkan halaman ke halaman guru
		return redirect('/guru');
	}



	// method untuk UBAH data guru
	public function ubah($id)
	{
		// mengambil data guru berdasarkan id yang dipilih
		$guru = DB::table('guru')->where('NUPTK', $id)->get();
		// passing data guru yang didapat ke view ubah.blade.php
		return view('ubah', ['guru' => $guru]);
	}


	// UPDATE data guru
	public function update(Request $request)
	{
		// update data guru
		DB::table('guru')->where('NUPTK', $request->id)->update([
			'NUPTK' => $request->NUPTK,
			'Nama_Guru' => $request->Nama_Guru,
			'Bidang_Mengajar' => $request->Bidang_Mengajar,
			'Kontak' => $request->Kontak
		]);
		// alihkan halaman ke halaman guru
		return redirect('/guru');
	}


	// method untuk hapus data pegawai
	public function hapus($id)
	{
		// MENGHAPUS data guru berdasarkan id yang dipilih
		DB::table('guru')->where('NUPTK', $id)->delete();

		// alihkan halaman ke halaman guru
		return redirect('/guru');
	}

	
	public function viewPdf()
    {
        $guru = DB::table('guru')->get();
        $pdf = Pdf::loadView('table', ["guru" => $guru]);
        return $pdf->stream('data_guru.pdf');
    }
}
