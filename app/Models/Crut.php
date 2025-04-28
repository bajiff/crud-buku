<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Crut extends Model
{
    protected $fillable = [
        'crut_name'
    ];

    public function books() : HasMany {
        return $this->hasMany(Book::class);
    }
}
