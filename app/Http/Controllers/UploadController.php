<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Gambar;

class UploadController extends Controller
{
	public function upload(){
		$gambar = gambar::get();
		return view('upload',['gambar' => $gambar]);
	}

	public function proses_upload(Request $request){
		$this->validate($request, [
			'foto' => 'required|foto|image|mimes:jpeg,png,jpg|max:2048',
			'keterangan' => 'required',
		]);

		// menyimpan data foto yang diupload ke variabel $foto
		$foto = $request->foto('foto');

		$nama_foto = time()."_".$foto->getClientOriginalName();

      	        // isi dengan nama folder tempat kemana foto diupload
		$tujuan_upload = 'data_foto';
		$file->move($tujuan_upload,$nama_foto);

		Gambar::create([
            'foto' => $nama_foto,
			'keterangan' => $request->keterangan,
		]);

		return redirect()->back();
	}
}