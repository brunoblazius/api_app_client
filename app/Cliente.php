<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = array('id', 'nome', 'email','telefone','cpf');
}
