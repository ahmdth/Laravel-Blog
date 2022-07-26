<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['slug', 'title', 'excrpt', 'body', 'published_at'];
    protected $with = ['category', 'user', 'comments'];
    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, fn($query, $search) => $query
            ->where("title", "like", "%" . $search . "%")
            ->orWhere("body", "like", "%" . $search . "%")
        );
        $query->when($filters['category'] ?? false, fn($query, $category) => $query
            ->whereExists(fn($query) => $query->from("categories")
                ->whereColumn("categories.id", "posts.category_id")
                ->where("categories.slug", $category)
            )
        );

    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
