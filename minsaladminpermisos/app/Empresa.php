<?php

namespace minsaladminpermisos;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    //
    protected $table='empresa';

    protected $primaryKey='idempresa';

    public $timestamps=false;


    protected $fillable =[
    	'idcliente',
    	'nombreempresa',
    	'razonsocial',
	    'emplfemenino',
	    'emplmasculino',
	    'capital',
	    'nitempresa',
	    'direccion',
	    'municipio'
    ];
}
