<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //One category might have many posts
    public function categories(){
        return $this->belongsToMany('App\Category', 'posts_categories');
    }
}
