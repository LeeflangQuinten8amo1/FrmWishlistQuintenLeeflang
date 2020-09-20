<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WishPost extends Model
{
    protected $fillable = ['name', 'price', 'description', 'imagename', 'link'];
}
