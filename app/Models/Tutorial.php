<?php

namespace App\Models;
use VanOns\Laraberg\Traits\RendersContent;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutorial extends Model
{
    use RendersContent;

    //
    protected $table = 'tutorials';

    protected $fillable = [
        'title',
        'slug',
        'thumbnail',
        'content',
        'id_creator',
        'page',
    ];

    protected $hidden = [];
}