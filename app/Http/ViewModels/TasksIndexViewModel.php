<?php

namespace App\Http\ViewModels;

use App\Data\TaskData;
use App\Models\Task;
use App\Queries\TasksOfUserQuery;
use Illuminate\Support\Collection;
use Spatie\LaravelData\DataCollection;
use Spatie\ViewModels\ViewModel;

class TasksIndexViewModel extends ViewModel
{
    private readonly Collection $tasks;

    public function __construct()
    {
        $this->tasks = (new TasksOfUserQuery())->execute(auth()->user());
    }

    public function complete(): DataCollection
    {
        return TaskData::collection(
            $this->tasks->filter(fn (Task $task) => $task->complete)->values(),
        )->only(
            'id',
            'name',
            'description',
            'complete',
        );
    }

    public function todo(): DataCollection
    {
        return TaskData::collection(
            $this->tasks->filter(fn (Task $task) => ! $task->complete)->values(),
        )->only(
            'id',
            'name',
            'description',
            'complete',
        );
    }
}
