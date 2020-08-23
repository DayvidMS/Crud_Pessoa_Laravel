<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelCadastro extends Model
{
    protected $table='Pessoa';
    protected $fillable=['Nome','Telefone','Email','id'];
}
