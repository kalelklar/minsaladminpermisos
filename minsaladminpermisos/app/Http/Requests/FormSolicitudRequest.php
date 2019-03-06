<?php

namespace minsaladminpermisos\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormSolicitudRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()

    {   
        return [
            //Validacion de las Solicitudes
            'idexpediente'=>'required',
            'fechaingreso'=>'required|max:12|date',
            'fecharesolucion'=>'required|max:12|date',
            'estado'=>'required|max:20'
              
            
        ];
    }
      public function messages()
    {
        return [
            'idexpediente.required' => 'El campo Vehiculo es requerido',
            'fechaingreso.required' => 'El campo Fecha Ingresos es requerida',
            'fechaingreso.max' => 'El campo Fecha Ingresos debe ser de 12 caracteres',
            'fechaingreso.date' => 'El campo Fecha Ingresos tiene que ser una fecha valida',
            'fecharesolucion.required' => 'El campo Fecha Resolucion es requerida',
            'fecharesolucion.max' => 'El campo Fecha Resolucion debe ser de 12 caracteres',
            'fecharesolucion.date' => 'El campo Fecha Resolucion tiene que ser una fecha valida'

            
        ];
    }
}
