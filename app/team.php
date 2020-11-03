<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class team extends Model
{
    protected $table='team';
    protected $primaryKey='id_team';
    public $incrementing =true;
    public $timestamps=true; 
    protected $fillable = [
      'id_team','nama','jabatan','foto','deskripsi'
    ];
}
