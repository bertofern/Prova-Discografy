<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artists extends Model
{
    protected $fillable = ['name', 'description'];
    protected $table = 'artists';
    public $timestamps = false;
}



