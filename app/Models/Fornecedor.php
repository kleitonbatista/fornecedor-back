<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fornecedor extends Models
{
    
    use HasFactory;
    protected $table = 'fornecedor';
    public $timestamps = false;
    protected $fillable = [
        'nome',
        'descricao',
        'dataCadastro',
        'status',
        'urlFoto',
        'enderecoId'
    ];

  
}
