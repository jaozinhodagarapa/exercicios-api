<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class ExercicioQuatroFormRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'numero' => 'required | numeric'
        ];
    }
    public function failedValidation(Validator $validator){
        throw new HttpResponseException(
            response()->Json([
            'success' => false,
            'error' => $validator->errors()

        ]));
    }
    public function messages()
    {
        return[
            'numero.required' => 'Preencha o campo antes',
            'numero.numeric' => 'Preencha o campo com numeros'
        ];
    }
    
}
