<?php

namespace App\Http\Controllers;

use App\Actions\DeleteTaskAction;
use App\Models\Task;

readonly class DeleteTaskController
{
    public function __construct(private DeleteTaskAction $deleteTaskAction)
    {
    }

    public function __invoke(Task $task)
    {
        $this->deleteTaskAction->execute($task);

        return to_route('tasks.index')->banner('Task deleted successfully.');
    }
}
