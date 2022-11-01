<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    use HasFactory;

    protected $fillable = [
        'parent_id',
        'slug',
        'level',
        'title',
        'main_image',
        'secondary_image',
        'position',
        'main',
        'featured',
        'meta_title',
        'meta_description',
        'meta_keyword',
        'meta_robots',
        'active',
        'author'
    ];

    public function getRouteKeyName(){
        return 'slug';
    }
}
