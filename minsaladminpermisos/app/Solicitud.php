<?php

namespace minsaladminpermisos;

use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    //
    protected $table='solicitud';

    protected $primaryKey='idsolicitud';

    public $timestamps=false;


    protected $fillable =[
    	'idexpediente',
    	'fechaingreso',
    	'fecharesolucion',
	    'resolucion',
	    'estado'
    ];
}
