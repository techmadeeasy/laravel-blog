<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;


    protected $fillable = [
        "title","photo_id", "body", "category_id", "user_id"
    ];

    public function user(){

        return $this->belongsTo("App\User", "user_id");
    }

    public  function categories(){
        return $this->belongsTo("App\Category", "category_id");
    }

    public function photo(){
      return  $this->belongsTo("App\Photo", "photo_id");
    }

    public function comments(){
        return $this->hasMany("App\comment");
    }

}
