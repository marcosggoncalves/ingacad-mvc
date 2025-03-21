<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCliente extends FormRequest
{ 
    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        return [
            'nome' => 'sometimes|string|max:255',
            'cpf_cnpj' => 'sometimes|string|max:20',
            'rua' => 'sometimes|string|max:255',
            'bairro' => 'sometimes|string|max:255',
            'cidade' => 'sometimes|string|max:255',
            'estado' => 'sometimes|string|max:2',
            'cep' => 'sometimes|string|max:9',
            'telefone' => 'sometimes|string|max:15',
            'email' => 'sometimes|email'
        ];
    }
}
