<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    public function post() //column name probably: post_id
    {
        return $this->belongsTo(Post::class);
    }
    public function author() //column name probably: author_id, so change to user_id
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
