<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Problem extends Model
{
    public $timestamps=false;
    public $incrementing=false;
    public $keyType='string';
    protected $table='problem';
    protected $fillable=['kode','ket','subject'];
}
