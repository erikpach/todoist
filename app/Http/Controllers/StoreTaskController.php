<?php

namespace App\Http\Controllers;

use App\Actions\CreateTaskAction;
use App\Data\CreateTaskData;

readonly class StoreTaskController
{
    public function __construct(private CreateTaskAction $createTaskAction)
    {
    }

    public function __invoke(CreateTaskData $createTaskData)
    {
        $this->createTaskAction->execute($createTaskData);

        return to_route('tasks.index')->banner('Task created successfully.');
    }
}
