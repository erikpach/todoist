<?php

namespace App\Actions;

use App\Data\CreateTaskData;
use App\Models\Task;

class CreateTaskAction
{
    public function execute(CreateTaskData $createTaskData): Task
    {
        return Task::create($createTaskData->all());
    }
}
