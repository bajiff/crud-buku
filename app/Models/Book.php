<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Book extends Model
{
    protected $guarded = ['title','author','publication_year', 'book_price'];
    public function categories(): BelongsTo{
        return $this->belongsTo(Category::class);
    }
    public function publishers(): BelongsTo{
        return $this->belongsTo(Publisher::class);
    }
    public function cruts(): BelongsTo {
        return $this->belongsTo(Crut::class);
    }    
}
