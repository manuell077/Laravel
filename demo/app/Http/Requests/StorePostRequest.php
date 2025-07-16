<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'titulo' => ['required','min:6'],
            'cuerpo' => 'required',
            'imagen' => 'required',
            
        ];


    }
    
    public function messages():array
    {
        return [
            "titulo.required" => "El campo titulo es obligatorio ",
            "cuerpo.required" => "El campo cuerpo es obligatorio"
        ]; 

    }
}
