<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent;

class Usuario extends Model
{
    protected $table='usuarios';
    public $timestamps=false;
    
    protected $connection = 'mysql';
    
    protected $fillable = array('nome','rua','cep','cidade','bairro');
    
    protected $guarded =['id'];
}
