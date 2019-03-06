<?php

namespace minsaladminpermisos\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormFechaRequest extends FormRequest
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
             'fechainicial'=>'required|max:12|date',

              'fechafinal'=>'required|max:12|date|after:fechainicial',
              
            
        ];
    }
      public function messages()
    {
        return [
            'fechainicial.required' => 'La Fecha Inicial es requerida',
            'fechafinal.required' => 'La Fecha Final es requerida',
            'fechafinal.after'=>'La fecha inicial debe ser menor a la fecha Final'

            
        ];
    }
}
