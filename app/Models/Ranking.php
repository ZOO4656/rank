<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ranking extends Model
{
    const MOVIE = 'movie';
    public $fillable = ['type', 'title'];
}
