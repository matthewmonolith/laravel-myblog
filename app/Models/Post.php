<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $with = ['category', 'author'];

    protected $guarded = [];

    public function category(){ //a post/posts BELONGS TO this category, ie a post about guitar playing belongs to the hobby category
        return $this->belongsTo(Category::class);
    }

    public function author(){ //assumes foreign_id key name is author
        return $this->belongsTo(User::class, 'user_id');
    }
    
}
