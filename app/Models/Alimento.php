<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alimento extends Model
{
    // Vai estar no select
    public $fillable = ['nome', 'categoria', 'quantidade', 'validade', 'preco']; 

    // Não vai estar no select
    public $hidden = ['created_at', 'updated_at'];
}