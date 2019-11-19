<?php

namespace Development;

use Illuminate\Database\Eloquent\Model;

class PostModel extends Model
{
    protected $table = 'posts';

    protected $fillable = ['title', 'content', 'file'];
}
