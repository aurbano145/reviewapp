<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    
    protected $table = 'reviews';
    
    protected $fillable = ['type', 'title', 'content', 'iduser', 'idimage'];
    
    public function user() {
        return $this->belongsTo('App\Models\User', 'iduser');
    }
    
    function images() {
        return $this->hasMany('App\Models\Image', 'idreview');
    }
}
