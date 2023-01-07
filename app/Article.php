<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

use App\User;

class Article extends Model
{
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
