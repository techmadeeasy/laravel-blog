<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $fillable = [
        "_id",
        "from",
        "to",
        "distance",
    ];
    protected $hidden = [
        "created_at", "id", "updated_at"
    ];

    public function getSyncedAttribute($value){
        return $value == 1 ? "true" : "false";
    }
}
