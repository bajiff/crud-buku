<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Book extends Model
{
    protected $fillable = ['title','author', 'book_price','publication_year','category_id', 'publisher_id'];

    public function categories(): BelongsTo{
        return $this->belongsTo(Category::class,'category_id');
    }
    public function publishers(): BelongsTo{
        return $this->belongsTo(Publisher::class,'publisher_id');
    }  
}
