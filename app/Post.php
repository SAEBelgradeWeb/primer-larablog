<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'body', 'user_id', 'category_id'];

    public function category()
    {
        return $this->belongsTo(\App\Category::class);
    }

    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }
}
