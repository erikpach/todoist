<?php

namespace App\Http\Controllers;

readonly class CreateTaskController
{
    public function __invoke()
    {
        return inertia('Tasks/Create/Page');
    }
}
