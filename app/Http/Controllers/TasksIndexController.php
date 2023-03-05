<?php

namespace App\Http\Controllers;

use App\Http\ViewModels\TasksIndexViewModel;

readonly class TasksIndexController
{
    public function __invoke()
    {
        return inertia('Tasks/Index/Page', new TasksIndexViewModel());
    }
}
