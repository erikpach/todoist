<?php

use App\Http\Controllers\CreateTaskController;
use App\Http\Controllers\DeleteTaskController;
use App\Http\Controllers\EditTaskController;
use App\Http\Controllers\StoreTaskController;
use App\Http\Controllers\TasksIndexController;
use App\Http\Controllers\ToggleTaskController;
use App\Http\Controllers\UpdateTaskController;
use App\Models\Task;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return inertia('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'appName' => config('app.name'),
    ]);
});

Route::prefix('tasks')
    ->name('tasks.')
    ->middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])
    ->group(function () {
        Route::get('/', TasksIndexController::class)->can('viewAny', Task::class)->name('index');

        Route::middleware('can:create,' . Task::class)
            ->group(function () {
                Route::get('create', CreateTaskController::class)->name('create');
                Route::post('/', StoreTaskController::class)->name('store');
            });

        Route::middleware('can:update,task')
            ->group(function () {
                Route::get('{task}/edit', EditTaskController::class)->name('edit');
                Route::put('{task}', UpdateTaskController::class)->name('update');
                Route::put('{task}/toggle', ToggleTaskController::class)->name('toggle');
            });

        Route::delete('{task}', DeleteTaskController::class)->can('delete', 'task')->name('delete');
    });
