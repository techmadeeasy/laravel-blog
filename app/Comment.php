<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public $fillable = [
      "post_id",  "author", "email", "body", "is_active"
    ];
    public function post(){
        return $this->belongsTo("App\Post", "post_id");
    }

    public function commentreplies(){
        return $this->hasMany("App\CommentReply");
    }
}
