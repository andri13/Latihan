<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\pesan;


class pesanController extends Controller
{

    public function pesan()
    {
        $pesan = DB::table('pesan')->get();
 
    	// mengirim data pegawai ke view index
		return view('pesan/tpesan',['pesan' => $pesan]);         
    }
    
	public function insert(Request $request)
		{

		// insert data ke table pegawai
		DB::table('pesan')->insert([
			'nama' => $request->nama,
			'email' => $request->email,
			'subjek' => $request->subjek,
            'pesan' => $request->pesan,
		]);

		// alihkan halaman ke halaman pegawai
		return redirect('kontak');
		}
		
}


    
