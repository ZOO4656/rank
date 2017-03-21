<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Thumbnail extends Model
{
    public $fillable = ['src', 'width', 'height', 'extension'];
    public $timestamps = false;
}
