<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\ValidationException;

class RegistroRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;

    }
    
    
        protected function failedValidation(Validator $validator)
        {
            if($this->expectsJson()){
                throw new HttpResponseException(response()->json([
                    'success' => false,
                    'message' => 'Erro de Validação',
                    'errors' => $validator->errors()
                ],422));
            }      
            
            // se for livewire, lança uma exceção padrao do laravel
            throw new ValidationException($validator);
        }

        public function messages(){
            return [
                'cod_sensor.required' => 'O codigo do sensor é obrigatorio',
                'valor.required' => 'O valor do sensor é obrigatorio',
                'valor.numeric' => 'O valor do sensor precisa ser númerico',
                'unidade.required' => 'A unidade de medida é obrigatorio',
            ];
        }


    /**
     * Get the validation rules that apply to the request.
    *
    * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
    */
    public function rules(): array
    {
        
        return [
            'cod_sensor' => 'required',
            'valor' => 'required|numeric',
            'unidade' => 'required'
        ];
    }
}
