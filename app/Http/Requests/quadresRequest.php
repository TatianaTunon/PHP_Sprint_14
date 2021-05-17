<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class quadresRequest extends FormRequest
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
            'author_name' => 'required | max:255',
            'title' => 'required | max:255',
            'price' => 'required | max:255',
            
        ];
    }
    public function attributes() {
        return [
                'author_name' => 'author_name',
                'title' => 'tittle',
                'price' => 'price',
                

            ];
    }
    
    public function messages(){
        return [
                "author_name" => "El :attribute es un parametro requerido",
                "title" => "El :attribute es un parametro requerido",
                "price" => "El :attribute es un parametro requerido",
                

            ];
           
        }
    
}
