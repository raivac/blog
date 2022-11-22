<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'titulo' => 'required|min:5',
            'contenido' => 'required|min:50'
        ];
    }
    public function messages()
    {
        return [
            'titulo.required' => 'El título es obligatorio',
            'titulo.min' => 'El título tiene que tener como minimo 5 caracteres',
            'contenido.required' => 'El contenido es obligatorio',
            'contenido.min' => 'El contenido tiene que tener como minimo 50 caracteres'
        ];
    }
}
