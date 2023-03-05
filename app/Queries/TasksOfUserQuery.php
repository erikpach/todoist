<?php

namespace App\Queries;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

class TasksOfUserQuery
{
    public function execute(User $user): Collection
    {
        return $user->tasks()->latest()->get();
    }
}
