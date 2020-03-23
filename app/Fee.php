<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fee extends Model
{
    //
    public $primaryKey='id';
    public $table='fees';
    protected $fillable = ['name','value'];
}
