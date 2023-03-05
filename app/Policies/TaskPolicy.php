<?php

namespace App\Policies;

use App\Models\Task;
use App\Models\User;

class TaskPolicy
{
    public function create(User $user): bool
    {
        return true;
    }

    public function delete(User $user, Task $task): bool
    {
        return $task->user->is($user);
    }

    public function update(User $user, Task $task): bool
    {
        return $task->user->is($user);
    }

    public function viewAny(User $user): bool
    {
        return true;
    }
}
