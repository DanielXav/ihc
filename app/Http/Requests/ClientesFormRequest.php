<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientesFormRequest extends FormRequest
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
            'nome' => ['required', 'min:3 ']
        ];
    }

    public function messages()
    {
        return [ // É possível adicionar regras gerais
            'nome.required' => 'O campo nome é obrigatório',
            'nome.min' => 'O campo nome precisa de pelo menos :min caracteres'
        ];
    }
}
