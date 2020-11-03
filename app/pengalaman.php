<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengalaman extends Model
{
    protected $table='pengalaman';
    protected $primaryKey='id_pengalaman';
    public $incrementing =true;
    public $timestamps=true; 
    protected $fillable = [
      'id_pengalaman','kategori','judul','foto1','foto2','foto3','klien','alamat','tahun','keterangan'
    ];
}
