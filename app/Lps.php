<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lps extends Model
{
    protected $fillable = ['artist_id','name', 'description'];
    protected $table = 'lps';
    public $timestamps = false;
}
