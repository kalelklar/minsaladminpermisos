<?php

namespace minsaladminpermisos\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormEmpresaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
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
        //Validacion del Representante legal
        'nombre'=>'required|max:60',
        'apellido'=>'required|max:60',
        'dui'=>'required|max:10|regex:/^[0-9]{8}[-]{1}[0-9]{1}$/i',
        'nit'=>'required|max:20|regex:/^[0-9]{4}[-]{1}[0-9]{6}[-]{1}[0-9]{3}[-]{1}[0-9]{1}$/i',
        'cargo'=>'required|max:30',
        //Validacion de Datos de la empresa
        'nombreempresa'=>'required|max:50',
        'razonsocial'=>'required|max:50',
        'emplfemenino'=>'required|integer',
        'emplmasculino'=>'required|integer',
        'capital'=>'required|numeric',
        'direccion'=>'required|max:50',
        'municipio'=>'required|max:30',
        //Validacion de Datos de vehiculos
        'modelo'=>'required|max:30',
        'placa'=>'required|max:8',
        'ano'=>'required|max:4|integer',
        'capacidad'=>'required|numeric',
        'tipo'=>'required|max:30'
        ];
    }
    public function messages()
    {
        return [
            //Mensajes de validacion de Representante legal
                'nombre.required' =>'El campo Nombre es obligatorio',
                'nombre.max' =>'El campo Nombre solo permite 60 caracteres',
                'apellido.required' =>'El campo apellido es obligatorio',
                'nombre.max' =>'El campo Apellido solo permite 60 caracteres',
                'dui.required' =>'El campo Documento de Identidad es obligatorio',
                'dui.max' =>'El campo DUI solo permite 9 digitos',
                'nit.required' =>'El campo Numero de Identificaion Tributaria es obligatorio',
                'nit.max' =>'El campo NIT solo permite 17 digitos',
                'dui.regex' =>'El campo Documento de Identidad no cumple el formato 00000000-0',
                'nit.regex' =>'El campo Numero de Identificacion Tributaria no cumple el formato 0000-000000-000-0',
                'cargo.required' =>'El campo Cargo es obligatorio',
                'cargo.max' =>'El campo Cargo solo permite 30 caracteres',
            //Mensajes de validacion de Datos de la empresa
                'nombreempresa.required' =>'El campo Nombre de la Empresa es obligatorio',
                'nombreempresa.max' =>'El campo Nombre de la Empresa solo permite 50 caracteres',
                'razonsocial.required' =>'El campo Razon Social es obligatorio',
                'razonsocial.max' =>'El campo Razon Social solo permite 50 caracteres',
                'emplfemenino.required' =>'El campo Empleados Femeninos es obligatorio',
                'emplfemenino.integer' =>'El campo Empleados Femeninos debe ser un numero entero',
                'emplmasculino.required' =>'El campo Empleados Masculinos es obligatorio',
                'emplmasculino.integer' =>'El campo Empleados  Masculinos debe ser un numero entero',
                'capital.required' =>'El campo Capital es obligatorio',
                'capital.numeric' =>'El campo Capital debe ser decimal',
                'direccion.required' =>'El campo Direccion es obligatorio',
                'direccion.max' =>'El campo Direccion solo permite 50 caracteres',
                'municipio.required' =>'El campo Municipo es obligatorio',
                'municipio.max' =>'El campo Municipio solo permite 30 caracteres',
            //Mensajes de validacion de Datos de la vehiculos
                'modelo.required' =>'El campo Modelo es obligatorio',
                'modelo.max' =>'El campo Modelo solo permite 30 caracteres',
                'placa.required' =>'El campo Placa es obligatorio',
                'placa.max' =>'El campo Placa solo permite 8 caracteres',
                'ano.required' =>'El campo Año es obligatorio',
                'ano.max' =>'El campo Año solo permite 4 caracteres',
                'ano.integer' =>'El campo Año debe ser un numero entero',
                'capacidad.required' =>'El campo Capacidad es obligatorio',
                'capacidad.numeric' =>'El campo Capacidad debe ser decimal',
                'tipo.required' =>'El campo Tipo es obligatorio',
                'tipo.max' =>'El campo Tipo solo permite 30 caracteres',
                
               ];
    }
}
