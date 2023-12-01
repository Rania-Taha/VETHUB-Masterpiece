<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table="blogs";
    use HasFactory;
    protected $fillable = [
        'title',
        'image1',
        'image2',
        'short_description',
        'section1',
        'section2',
        'section3',
    ];
}
