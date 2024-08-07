<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Tipo extends Model
{
    use HasFactory;

    protected $table = 'tipos';
    public $timestamps = false;

    public function vehiculos(){
        return $this->hasMany('App\Models\Vehiculo');
    }



}
