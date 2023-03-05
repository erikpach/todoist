<?php

namespace App\Actions;

use App\Models\Task;

class ToggleTaskAction
{
    public function execute(Task $task): Task
    {
        return tap($task)->update([
            'completed_at' => $task->complete ? null : now(),
        ]);
    }
}
