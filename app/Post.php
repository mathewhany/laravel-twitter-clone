<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['content', 'parent_id'];

    public function isComment()
    {
        return ! is_null($this->parent_id);
    }

    public function isShared()
    {
        return ! is_null($this->original_id);
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function parent()
    {
    	return $this->belongsTo('App\Post', 'parent_id');
    }

    public function comments()
    {
    	return $this->hasMany('App\Post', 'parent_id');
    }

    public function original()
    {
        return $this->belongsTo('App\Post', 'original_id');
    }

    public function shares()
    {
        return $this->hasMany('App\Post', 'original_id');
    }
}
