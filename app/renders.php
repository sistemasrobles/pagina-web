<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class renders extends Model
{
    protected $table='renders';
    protected $primaryKey='idrender';
    public $timestamps=true;
    protected $fillable=['img','tipo','idproyecto'];
    protected $guarded =['idrender'];
}
