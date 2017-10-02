<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostTag extends Model
{
    protected $table = 'myblog.post_tag';
    protected $guarded = [];
    public $timestamps = false;
}
