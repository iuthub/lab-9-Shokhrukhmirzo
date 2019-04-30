<?php

namespace App;
use App\Tag;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable=['title', 'content'];
    public function likes()
    {
        return $this->hasMany('App\Like', 'post_id');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag', 'post_tag', 'tag_id', 'post_id')->withTimestamps();
    }

  
}
