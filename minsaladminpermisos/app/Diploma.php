<?php

namespace minsaladminpermisos;

use Illuminate\Database\Eloquent\Model;

class Diploma extends Model
{
    //
    protected $table='diploma';

    protected $primaryKey='iddiploma';

    public $timestamps=false;


    protected $fillable =[
    	'idsolicitud',
    	'fechainicio',
    	'fecharexpiracion'
}
