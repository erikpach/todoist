<?php

namespace App\Http\ViewModels;

use App\Data\TaskData;
use App\Models\Task;
use Spatie\ViewModels\ViewModel;

class EditTaskViewModel extends ViewModel
{
    public function __construct(private readonly Task $task)
    {
    }

    public function task(): TaskData
    {
        return TaskData::from($this->task)
            ->only(
                'id',
                'name',
                'description',
            );
    }
}
