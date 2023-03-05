<?php

namespace App\Http\Controllers;

use App\Actions\UpdateTaskAction;
use App\Data\UpdateTaskData;
use App\Models\Task;

readonly class UpdateTaskController
{
    public function __construct(private UpdateTaskAction $updateTaskAction)
    {
    }

    public function __invoke(Task $task, UpdateTaskData $updateTaskData)
    {
        $this->updateTaskAction->execute($task, $updateTaskData);

        return to_route('tasks.index')->banner('Task updated successfully.');
    }
}
