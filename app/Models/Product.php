<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /*Criação de uma variavel $fillable que receberá os parâmetros a serem passados no cadastro de um produto*/
    protected $fillable = [
        'name', 'price', 'description', 'slug'
    ];
}
