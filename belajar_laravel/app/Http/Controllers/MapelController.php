<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;

class MapelController extends Controller
{
	public function index2()
	{
		// mengambil data dari table mapel
		$mapel = DB::table('mapel')->get();

		// mengirim data mapel ke view index
		return view('index2', ['mapel' => $mapel]);
	}




	public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

		// mengambil data dari table mapel sesuai pencarian data
		$mapel = DB::table('mapel')
			->where('Mata_Pelajaran', 'like', "%" . $cari . "%")
			->paginate();

		// mengirim data mapel ke view index
		return view('index2', ['mapel' => $mapel]);
	}




	// method untuk MENAMPILKAN VIEW form tambah mapel
	public function tambah()
	{

		$Bidang_Mengajar = DB::table('Guru')->get();


		// memanggil view tambah
		return view('tambah2', ['Bidang_Mengajar' => $Bidang_Mengajar]);
	}





	// method untuk INSERT DATA ke table mapel
	public function store(Request $request)
	{
		// insert data ke table mapel
		DB::table('mapel')->insert([
			'Tingkat_Kelas' => $request->Tingkat_Kelas,
			'ID_Mapel' => $request->ID_Mapel,
			'Mata_Pelajaran' => $request->Bidang_Mengajar,
			'No_Ruangan' => $request->No_Ruangan
		]);
		// alihkan halaman ke halaman mapel
		return redirect('/mapel');
	}




	// method untuk UBAH data mapel
	public function ubah($id)
	{
		// mengambil data mapel berdasarkan id yang dipilih
		$mapel = DB::table('mapel')->where('ID_Mapel', $id)->get();
		// passing data mapel yang didapat ke view ubah.blade.php
		return view('ubah2', ['mapel' => $mapel]);
	}


	// UPDATE data mapel
	public function update(Request $request)
	{
		// update data mapel
		DB::table('mapel')->where('ID_Mapel', $request->id)->update([
			'Tingkat_Kelas' => $request->Tingkat_Kelas,
			'ID_Mapel' => $request->ID_Mapel,
			'Mata_Pelajaran' => $request->Mata_Pelajaran,
			'No_Ruangan' => $request->No_Ruangan
		]);
		// alihkan halaman ke halaman mapel
		return redirect('/mapel');
	}

	// method untuk hapus data pegawai
	public function hapus($id)
	{
		// MENGHAPUS data mapel berdasarkan id yang dipilih
		DB::table('mapel')->where('ID_Mapel', $id)->delete();

		// alihkan halaman ke halaman mapel
		return redirect('/mapel');
	}

	public function viewPdf()
    {
        $mapel = DB::table('mapel')->get();
        $pdf = Pdf::loadView('table2', ["mapel" => $mapel]);
        return $pdf->stream('data_mapel.pdf');
    }
}
