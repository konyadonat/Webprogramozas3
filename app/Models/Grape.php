<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grape extends Model
{
    use HasFactory;

    protected $fillable = [
        'type', 'place_id'
    ];

    public function place() {
        return $this->belongsTo(Place::class);
    }
    
}
