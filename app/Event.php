<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'placa','renavam','modelo','marca','ano','propietario','id'
    ];
}
