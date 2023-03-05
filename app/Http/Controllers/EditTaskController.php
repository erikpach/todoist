<?php

namespace App\Http\Controllers;

use App\Http\ViewModels\EditTaskViewModel;
use App\Models\Task;

readonly class EditTaskController
{
    public function __invoke(Task $task)
    {
        return inertia('Tasks/Edit/Page', new EditTaskViewModel($task));
    }
}
