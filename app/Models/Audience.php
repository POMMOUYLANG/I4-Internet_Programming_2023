<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Audience extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'article_id',
        'user_id',
    ];

    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function comment(): MorphMany{
        return $this->morphMany(Comment::class, 'commentable');
    }
}
