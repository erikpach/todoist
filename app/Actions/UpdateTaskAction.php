<?php

namespace App\Actions;

use App\Data\UpdateTaskData;
use App\Models\Task;

class UpdateTaskAction
{
    public function execute(Task $task, UpdateTaskData $updateTaskData): Task
    {
        return tap($task)->update($updateTaskData->all());
    }
}
