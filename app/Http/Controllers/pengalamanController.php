<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\pengalaman;


class pengalamanController extends Controller
{


    public function pengalaman()
    {
        $pengalaman = DB::table('pengalaman')->get();
 
    	// mengirim data pegawai ke view index
		return view('pengalaman',['pengalaman' => $pengalaman]);         
    }
    public function lengkapp($id)
    {
        $pengalaman = DB::table('pengalaman')->where('id_pengalaman',$id)->get();
 
    	// mengirim data pegawai ke view index
		return view('lengkapp',['pengalaman' => $pengalaman]);         
    }
   

    public function pengalamanedit()
    {
        $pengalaman = DB::table('pengalaman')->get();
 
    	// mengirim data pegawai ke view index
		return view('pengalaman/epengalaman',['pengalaman' => $pengalaman]);         
    }

    public function edit($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$pengalaman = DB::table('pengalaman')->where('id_pengalaman',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('pengalaman/editpeng',['pengalaman' => $pengalaman]);
 
    }
    public function hapus($id)
	{
		DB::table('pengalaman')->where('id_pengalaman',$id)->delete();
		
		// alihkan halaman ke halaman pegawai
		return redirect('epengalaman');
    }


    public function tambah(Request $request){
		$this->validate($request, [
            
            'judul'=> 'required',
            'foto1' => 'image:jpeg,png,jpg|max:2048',
            'foto2' => 'image:jpeg,png,jpg|max:2048',
            'foto3' => 'image:jpeg,png,jpg|max:2048',
            'klien'=> 'required',
            'alamat'=> 'required',
            'tahun'=> 'required',
			'keterangan' => 'required',
		]);
		// menyimpan data file yang diupload ke variabel $file
		$foto1 = $request->foto1('foto1');
 
		$foto1 = time()."_".$foto1->getClientOriginalName();
 
      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'foto1';
		$foto1->move($tujuan_upload,$foto1);
 
		DB::create([
            
            'judul' => $request->judul,
            
            'foto1' => $foto1,
            'foto1' => $nama_file,
            'foto1' => $nama_file,
            'klien' => $request->klien,
            'alamat' => $request->alamat,
            'tahun' => $request->tahun,
			'keterangan' => $request->keterangan,
		]);
 
		return redirect()->back();
	}

    

    public function tambahh(Request $request)
    {
        $category = DB::table('pengalaman')
            ->get()
            ->pluck('kategori','id_pengalaman');

        $this->validate($request , [
            'kategori'         => 'required|string',
            'judul'         => 'required',
            'foto1'          => 'required',
            'klien'        => 'required',
            'alamat'   => 'required',
            'tahun'   => 'required',
            'keterangan'   => 'required',


        ]);

        $input = $request->all();
        $input['foto1'] = null;

        if ($request->hasFile('foto1')){
            $input['foto1'] = '/upload/products/'.str_slug($input['nama'], '-').'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('/upload/products/'), $input['foto1']);
        }

        Product::create($input);

        return response()->json([
            'success' => true,
            'message' => 'Products Created'
        ]);

    }
   



}
