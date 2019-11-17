<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table='siswas';
    protected $primaryKey='no';
    protected $fillable=['no','nrp','nama','password'];
    public $timestamps = false;
}
