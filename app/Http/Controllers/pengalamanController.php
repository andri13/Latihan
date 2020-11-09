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

   


    public function tambah(Request $request){
        $request->validate([
            'kategori'    =>  'required',
            'judul'    =>  'required',
            'klien'    =>  'required',
            'alamat'    =>  'required',
            'tahun'    =>  'required',
            'keterangan'    =>  'required',
            'foto1'     =>  'required|image|max:2048',
            'foto2'         =>  'required|image|max:2048',
            'foto3'         =>  'required|image|max:2048'
        ]);

        $image = $request->file('foto1');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('pengalaman'), $new_name);
        

		$image2 = $request->file('foto2');
		$new_name2 = rand() . '.' . $image2->getClientOriginalExtension();
        $image2->move(public_path('pengalaman'), $new_name2);
        
        $image3 = $request->file('foto3');
		$new_name3 = rand() . '.' . $image3->getClientOriginalExtension();
		$image3->move(public_path('pengalaman'), $new_name3);
		$form_data = array(
            'kategori'       =>   $request->kategori,
            'judul'       =>   $request->judul,
            'klien'       =>   $request->klien,
            'alamat'       =>   $request->alamat,
            'tahun'       =>   $request->tahun,
            'keterangan'       =>   $request->keterangan,
            'foto1'             =>$new_name,
            'foto2'             =>$new_name2,
            'foto3'             =>$new_name3,
        );

        pengalaman::create($form_data);

        return redirect('epengalaman')->with('success', 'Data Added successfully.');
    }

    public function hapus($id)
	{
		DB::table('pengalaman')->where('id_pengalaman',$id)->delete();
		
		// alihkan halaman ke halaman pegawai
		return redirect('epengalaman');
    }
    public function edit($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$pengalaman = DB::table('pengalaman')->where('id_pengalaman',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('pengalaman/editpeng',['pengalaman' => $pengalaman]);
 
    }
  
    public function update(Request $request, $id)
    {
        $image_name = $request->hidden_image;
        $image = $request->file('foto1,foto2,foto3');
        if($image != '')
        {
            $request->validate([
            'kategori'    =>  'required',
            'judul'    =>  'required',
            'klien'    =>  'required',
            'alamat'    =>  'required',
            'tahun'    =>  'required',
            'keterangan'    =>  'required',
            'foto1'     =>  'required|image|max:2048',
            'foto2'         =>  'required|image|max:2048',
            'foto3'         =>  'required|image|max:2048'
            ]);

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);
        }
        else
        {
            $request->validate([
                'first_name'    =>  'required',
                'last_name'     =>  'required'
            ]);
        }

        $form_data = array(
            'first_name'       =>   $request->first_name,
            'last_name'        =>   $request->last_name,
            'image'            =>   $image_name
        );
  
        Crud::whereId($id)->update($form_data);

        return redirect('crud')->with('success', 'Data is successfully updated');
    }

   



}
