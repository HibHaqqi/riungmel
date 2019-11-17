<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UnitEx extends Model
{
    protected $table='unit_ex';
    protected $primaryKey='id_ex';
    protected $fillable=['id_ex','no_unit','cn','tipe_unit'];
    public $timestamps=false;
}
