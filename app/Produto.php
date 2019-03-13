<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = array('id', 'nome', 'qtd','preco','descricao');
}
