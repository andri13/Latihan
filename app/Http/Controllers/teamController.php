<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\team;


class teamController extends Controller
{

    public function team()
    {
        $team = DB::table('team')->get();
 
    	// mengirim data pegawai ke view index
		return view('team',['team' => $team]);         
    }
    

    public function teamedit()
    {
        $team = Team::get();
 
    	// mengirim data pegawai ke view index
		return view('team/eteam',['team' => $team]);         
    }

    public function edit($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$team = DB::table('team')->where('id_team',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('team/editteam',['team' => $team]);
 
	}
	public function hapus($id)
	{
		DB::table('team')->where('id_team',$id)->delete();
		return redirect('eteam');
	}
	public function tambah(Request $request){
		$this->validate($request, [
			'nama' => 'required',
			'jabatan' => 'required',
			'foto' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
			'deskripsi' => 'required',
		]);
 
		// menyimpan data file yang diupload ke variabel $file
		$foto = $request->file('foto');
 
		$nama_file = time()."_".$foto->getClientOriginalName();
 
      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'team';
		$foto->move($tujuan_upload,$nama_file);
 
		Gambar::create([
			'nama' => $request->nama,
			'jabatan' => $request->jabatan,
			'foto' => $nama_file,
			'deskripsi' => $request->deskripsi,
		]);
 
		return redirect()->back();
	}
	public function insert(Request $request)
		{
		// menyimpan data file yang diupload ke variabel $file
		$foto = $request->file('foto');
 
		$nama_file = time()."_".$foto->getClientOriginalName();
 
      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'team';
		$foto->move($tujuan_upload,$foto);

		// insert data ke table pegawai
		DB::table('team')->insert([
			'nama' => $request->nama,
			'jabatan' => $request->jabatan,
			'foto' => $foto,
            'deskripsi' => $request->deskripsi,
		]);

		// alihkan halaman ke halaman pegawai
		return redirect('eteam');
		}
}


    
