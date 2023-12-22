<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $with = ['category', 'author'];

    protected $guarded = [];

    public function category()
    { //a post/posts BELONGS TO this category, ie a post about guitar playing belongs to the hobby category
        return $this->belongsTo(Category::class);
    }

    public function author()
    { //assumes foreign_id key name is author
        return $this->belongsTo(User::class, 'user_id');
    }

    public function scopeFilter($query, array $filters)
    { //post::newquery()->where(xyz)
        $query->when($filters['search'] ?? false, function ($query, $search) {
            $query->where(
                fn ($query) =>
                $query->where('title', 'like', '%' . $search . '%')
                    ->orWhere('body', 'like', '%' . $search . '%') //basically a sql statement
            );
        });

        $query->when($filters['category'] ?? false, function ($query, $category) {
            $query->whereHas('category', fn ($query) => $query->where('slug', $category));
        }); //give me the posts where it has the category that matches the slug that was in the browser req

        $query->when($filters['author'] ?? false, function ($query, $author) {
            $query->whereHas('author', fn ($query) => $query->where('username', $author));
        });
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
