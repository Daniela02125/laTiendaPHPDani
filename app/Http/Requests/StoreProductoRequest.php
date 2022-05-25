<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductoRequest extends FormRequest
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

        return[
            "nombre" => 'required|alpha|unique:productos,nombre',
            "desc" => 'required|max:100',
            "precio"  =>'required|numeric|max:10000',
            "categoria" => 'required',
            'imagen'=> 'required|image',
            "marca"=> 'required'

        ];


    }

    //mensajes personalizados
    public function messages(){
        return[
            'required'=> 'dato obligatorio',
            'unique'=> 'El producto ya existe',
            'alpha' => 'solo letras',
            'max'=> 'maximo :max caracteres',
            'numeric'=> 'solo numeros',
            'imagen'=> 'solo imagenes'
        ];
    }
}
