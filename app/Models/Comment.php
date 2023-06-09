<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'name', 'email', 'comment_text', 'created_at', 'updated_at', 'blog_id'];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

}
