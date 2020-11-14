<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function carts() {
        return $this->belongsToMany('App\Cart'); 
    }
    
    public function categories() {
        return $this->belongsToMany('App\Category', 'item_category');
    }
}
