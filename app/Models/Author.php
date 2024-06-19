<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Author extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'user_id',
    ];

    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function article(): HasMany{
        return $this->hasMany(Article::class);
    }

    public function comment(): MorphMany{
        return $this->morphMany(Comment::class, "commentable");
    }

    public function audiences(): HasManyThrough{
        return $this->hasManyThrough(Audience::class, Article::class);
    }
}
