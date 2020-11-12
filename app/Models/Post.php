<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected static function booted()
    {
        static::creating(function ($post) {
            $post->slug = make_slug($post->title);
        });
        static::updating(function ($post) {
            $post->slug = make_slug($post->title);
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
