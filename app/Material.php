<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $table='material';
    protected $primaryKey='no';
    protected $fillable=['no','material','swell'];
    public $timestamps=false;
    public $keyType='string';
    public $incrementing=false;
}
