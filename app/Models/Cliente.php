<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = [
        'nome',
        'cpf_cnpj',
        'rua',
        'bairro',
        'cidade',
        'estado',
        'cep',
        'numero',
        'telefone' ,
        'email',
    ];

    protected $hidden = [];
}
