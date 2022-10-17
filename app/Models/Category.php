<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['title', 'slug', 'image', 'text'];

    use HasFactory;

    public function posts()
    {
        $this->hasMany(Post::class);
    }
}
