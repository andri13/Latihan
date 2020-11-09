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
			'foto' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
			'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
			'keterangan' => 'required',
		]);
 
		// menyimpan data file yang diupload ke variabel $file
		$file1 = $request->file('file');
 
		$nama_file1 = time()."_".$file1->getClientOriginalName();
 
      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'data_file';
		$file1->move($tujuan_upload,$nama_file1);


		$file = $request->file('file');
 
		$nama_file = time()."_".$file->getClientOriginalName();
 
      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'data_file';
		$file->move($tujuan_upload,$nama_file);

		Gambar::create([
			'foto' => $nama_file1,
			'foto' => $nama_file,
			'keterangan' => $request->keterangan,
		]);
 
		return redirect()->back();
	}

	public function store(Request $request)
    {
        $request->validate([
            'keterangan'    =>  'required',
            'file'     =>  'required|image|max:2048',
            'foto'         =>  'required|image|max:2048'
        ]);

        $image = $request->file('foto');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('foto'), $new_name);
        

		$image2 = $request->file('file');
		$new_name2 = rand() . '.' . $image2->getClientOriginalExtension();
		$image2->move(public_path('foto'), $new_name2);
		$form_data = array(
            'keterangan'       =>   $request->keterangan,
            'file'        =>   $new_name2,
            'foto'            =>   $new_name
        );

        Gambar::create($form_data);

        return redirect('upload')->with('success', 'Data Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */



}