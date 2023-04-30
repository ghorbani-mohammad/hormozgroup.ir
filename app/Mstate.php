<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mstate extends Model
{
    //
    public $primaryKey='user_id';
    protected $fillable = ['user_id', 'state'];
}
