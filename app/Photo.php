<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable =[
        "name"
    ];

    protected $directory = "storage/images/";

    public function users(){
        return $this->hasMany("App\User");
    }

    public function posts(){
        return $this->hasMany("App\Post");
    }

    public function getNameAttribute($photo){
        return $this->directory . $photo;
    }
}
