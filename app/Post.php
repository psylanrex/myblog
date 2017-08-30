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
    public function getPostLink()
    {
        return "/blog/" . implode('-', explode(' ', $this->title));
    }
}
