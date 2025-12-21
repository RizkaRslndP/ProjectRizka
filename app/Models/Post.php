<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model //tabel blog_posts
{
    use HasFactory;
    protected $fillable = ['title', 'author', 'slug', 'body', 'category_id', 'pdf_path'];

    protected $with = ['category', 'author'];

    public function author()
    {
        return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
