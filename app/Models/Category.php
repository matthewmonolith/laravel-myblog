<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function posts(){ //a category ie Hobby, HAS this MANY posts
        return $this->hasMany(Post::class);
    }
}
