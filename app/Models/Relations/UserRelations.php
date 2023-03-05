<?php

namespace App\Models\Relations;

use App\Models\Task;
use Illuminate\Database\Eloquent\Relations\HasMany;

trait UserRelations
{
    public function tasks(): HasMany
    {
        return $this->hasMany(Task::class);
    }
}
