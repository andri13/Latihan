<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pesan extends Model
{
    protected $table='pesan';
    protected $primaryKey='id_pesan';
    public $incrementing =true;
    public $timestamps=true; 
    protected $fillable = [
      'id_pesan','nama','subjek','pesan'
    ];
}