<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    use HasFactory;


    protected $guarded = [
        'id',
    ];

    public function images(): HasMany
    {
        return $this->HasMany(Gallery::class);
    }
    public function user(): BelongsTo
    {
        return $this->BelongsTo(User::class);
    }
    public function likes(): HasMany
    {
        return $this->HasMany(Like::class);
    }
    public function comments(): HasMany
    {
        return $this->HasMany(Comment::class);
    }
}
