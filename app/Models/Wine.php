<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wine extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'grape_id', 'vintage', 'winetypes_id'
    ];

    public function grape() {
        return $this->belongsTo(Grape::class);
    }

    public function wineType() {
        return $this->belongsTo(WineType::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    


}
