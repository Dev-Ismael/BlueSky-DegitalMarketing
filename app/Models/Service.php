<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'title ',
        'slug',
        'seo_title',
        'seo_keywords',
        'seo_description',
        'content',
        'summary',
        'icon',
        'img',
    ];

}
