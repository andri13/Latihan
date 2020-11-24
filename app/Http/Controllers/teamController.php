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


	public function hapus($id)
	{
		DB::table('team')->where('id_team',$id)->delete();
		return redirect('eteam');
	}

	public function tambah(Request $request){
		$this->validate($request, [
			'nama' => 'required',
			'jabatan' => 'required',
			'foto'         =>  'required|image|max:1500',
			'deskripsi' => ''
		]);
		// menyimpan data file yang diupload ke variabel $file

		$file = $request->file('foto');
 
		$nama_file = time()."_".$file->getClientOriginalName();
 
      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'team';
		$file->move($tujuan_upload,$nama_file);

		team::create([
			'nama' => $request->nama,
			'jabatan' => $request->jabatan,
			'foto' => $nama_file,
			'deskripsi' => $request->deskripsi,
		]);

		return redirect('eteam');
		}

		
		public function edit($id)
		{
			// mengambil data pegawai berdasarkan id yang dipilih
			$team = DB::table('team')->where('id_team',$id)->get();
			// passing data pegawai yang didapat ke view edit.blade.php
			return view('team/editteam',['team' => $team]);
	 
		}

		public function update(Request $request){
			$image_name = $request->hidden_image;
			$image = $request->file('foto');
			
		
				$request->validate([
					'nama' => 'required',
					'jabatan' => 'required',
					'foto' => 'file|image|mimes:jpeg,png,jpg|max:2048',
					'deskripsi' => 'required',
				]);
	
				$image_name = rand() . '.' . $image->getClientOriginalExtension();
				$image->move(public_path('foto'), $image_name);
			
			
	
			$form_data = array(
				'nama' => $request->nama,
				'jabatan' => $request->jabatan,
				'foto' => $nama_file,
				'deskripsi' => $request->deskripsi,

			);
	  
			team::whereId('id_team')->update($form_data);
	
			return redirect('eteam')->with('success', 'Data is successfully updated');
		}
	
}



    
