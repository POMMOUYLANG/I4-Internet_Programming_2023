<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'author_id'
    ];

    public function audiences(): HasMany{
        return $this->hasMany(Audience::class);
    }

    public function comment(): MorphMany{
        return $this->morphMany(Comment::class, 'commentable');
    }
}
