<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class movie extends Model
{
    protected $table = 'movie';
    protected $fillable = ['imBD', 'title', 'year', 'genre', 'poster'];
    public $timestamps = true;

    // public function getRouteKeyName()
    // {
    //     return 'imBD';
    // }
}
