<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProblemOnLoad extends Model
{
    public $timestamps=false;
    public $incrementing=false;
    protected $table='problem_on_load';
    protected $fillable=['load','problem'];
}
