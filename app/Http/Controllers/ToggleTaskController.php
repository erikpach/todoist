<?php

namespace App\Http\Controllers;

use App\Actions\ToggleTaskAction;
use App\Models\Task;

readonly class ToggleTaskController
{
    public function __construct(private ToggleTaskAction $toggleTaskAction)
    {
    }

    public function __invoke(Task $task)
    {
        $this->toggleTaskAction->execute($task);

        return to_route('tasks.index');
    }
}
