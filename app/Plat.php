<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plat extends Model
{
    protected $fillable=['name','price','description','category_id'];
    
    public function category()
    {
        return $this->belongsTo('App\Category', 'category_id');
    }
}
