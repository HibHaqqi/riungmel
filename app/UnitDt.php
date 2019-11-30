<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UnitDt extends Model
{
    protected $table='unit_dt';
    protected $primaryKey='id_dt';
    protected $fillable=['id_dt','no_unit','cn','tipe','cap_vessel','ready'];
    public $timestamps=false;
}
