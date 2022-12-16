<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    
    protected $table = 'images';
    
    public function review() {
        return $this->belongsTo('App\Models\Review', 'idreview');
    }
}
