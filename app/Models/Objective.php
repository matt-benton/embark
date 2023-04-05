<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Goal;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Subtask;

class Objective extends Model
{
    use HasFactory;

    public function goal(): BelongsTo
    {
        return $this->belongsTo(Goal::class);
    }

    public function subtasks(): HasMany
    {
        return $this->hasMany(Subtask::class);
    }

    public function complete(): void
    {
        $this->completed_at = Carbon::now();
        $this->save();
    }

    public function scopeComplete(Builder $query): void
    {
        $query->whereNotNull('completed_at');
    }

    public function scopeIncomplete(Builder $query): void
    {
        $query->whereNull('completed_at');
    }
}
