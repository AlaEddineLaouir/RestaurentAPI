<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Command extends Model
{
    protected $fillable=['type','valide','command','etat','table_id'];
    
    public function table()
    {
        return $this->belongsTo('App\Table','table_id');
    }
}
