<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    protected $table='blog';
    protected $primaryKey='id';
    public $timestamps=true;
    protected $fillable=['titulo','img','descripcion','slug','descripcion_min'];
    protected $guarded =['id'];



}
