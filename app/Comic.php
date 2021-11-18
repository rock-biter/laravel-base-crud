<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = ['title', 'author', 'description', 'url'];

    public function category(){

        return $this->belongsTo('App\Category', 'category_id', 'id');
    }
}
