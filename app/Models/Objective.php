<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Goal;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Objective extends Model
{
    use HasFactory;

    public function goal(): BelongsTo
    {
        return $this->belongsTo(Goal::class);
    }
}
