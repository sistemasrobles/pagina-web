<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    protected $table='ciudades';
   
    public $timestamps=false;
    protected $fillable=[
        'id',
        'text'
    ];
    protected $guarded =['id'];
}
