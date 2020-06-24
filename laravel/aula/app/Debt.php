<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Debt extends Model
{
    protected $fillable = [
        'name', 'cpf', 'value',
    ];
}
