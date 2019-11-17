<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jeda extends Model
{
    protected $table='jeda';
    protected $primaryKey='kode_jeda';
    protected $fillable=['kode_jeda','activity'];
    public $timestamps=false;
    public $incrementing=false;
    public $keyType='string';
}
