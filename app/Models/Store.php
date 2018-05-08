<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    public $timestamps = false;
    private $table = 'stores';

    private $fillable = [
        'id',
        'cnpj',
        'insc_est',
        'nome_fantasia',
        'razao_social',
        'identificacao_empresa'
    ];
}

