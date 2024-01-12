<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class slider extends Model
{
    protected $table='slider_prin';
    protected $primaryKey='idslider';
    public $timestamps=true;
    protected $fillable=['img','link','posicion','estado_slider','banner_movil'];
    protected $guarded =['idslider'];
}
