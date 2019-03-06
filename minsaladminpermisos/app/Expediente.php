<?php

namespace minsaladminpermisos;

use Illuminate\Database\Eloquent\Model;

class Expediente extends Model
{
    //
    protected $table='expediente';

    protected $primaryKey='idexpediente';

    public $timestamps=false;


    protected $fillable =[
    	'idvehiculo',
    	'fechaapertura'
    ];
}
