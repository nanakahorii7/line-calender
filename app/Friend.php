<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class friend extends Model
{
    protected $fillable = [
        'date',
        'name',
        'image',
        'category',
        'memo',
        ];
        

}
