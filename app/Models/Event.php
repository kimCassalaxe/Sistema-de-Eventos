<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    //para converter uma array em string
    protected $casts = [
        'itens' => 'array'
    ];
    //sempre que colocar um campo de data, deve sempre informar ao laravel com essa atrubuição 
    protected $dates = ['date'];
}
