<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WineType extends Model
{
    use HasFactory;

    protected $fillable = [
        'type'
    ];

    protected $table = 'winetypes';
    public function wineTypes() {
        return $this->hasMany(Wine::class);
    }
}
