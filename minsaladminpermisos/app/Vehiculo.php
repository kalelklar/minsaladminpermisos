<?php

namespace minsaladminpermisos;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    //
    protected $table='vehiculo';

    protected $primaryKey='idvehiculo';

    public $timestamps=false;


    protected $fillable =[
    	'idempresa',
    	'modelo',
    	'placa',
	    'ano',
	    'capacidad',
	    'tipo',
	    'refigeracion'
    ];
}
