<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];

    /**
     * Returns post link on blog page
     * @return string
     */
    public function slug()
    {
        return strtolower(implode('-', explode(' ', $this->title)));
    }
    
    public function getImageName()
    {
        return time() . '-' . $this->slug();
    }
    
    /**
     * Returns truncated text of the body
     */
    public function truncate($length)
    {
        return substr(strip_tags($this->body), 0, $length) . "... ";
    }
    
    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }
    
    public function image()
    {
        return $this->belongsTo('App\Image');
    }
    
    public function scopePublished($query)
    {
        return $query->where('published_at', '<=', date("Y-m-d H:i:s"));
    }
}
