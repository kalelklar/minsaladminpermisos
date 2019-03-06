<?php

namespace minsaladminpermisos;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //
    protected $table='cliente';

    protected $primaryKey='idcliente';

    public $timestamps=false;


    protected $fillable =[
    	'nombre',
    	'apellido',
    	'dui',
    	'nit',
    	'cargo'
    ];
}
