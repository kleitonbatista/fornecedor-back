<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Endereco extends Models
{
    
    use HasFactory;
    protected $table = 'endereco';
    public $timestamps = false;
    
    protected $fillable = [
        'cep',
        'logradouro',
        'uf',
        'bairro',
        'cidade',
        'complemento'
    ];

  
}
