<?php

namespace App;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'placa','renavam','modelo','marca','ano','propietario','id','user_id','autor'
    ];
    protected $guarded = [];
    public function user(){
        return $this->belongsTo('app\User');
    }
}
