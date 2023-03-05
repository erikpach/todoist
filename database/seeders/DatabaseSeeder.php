<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()
            ->has(Task::factory()->count(3))
            ->has(Task::factory()->completed()->count(2))
            ->create([
                'name' => 'John Doe',
                'email' => 'john.doe@todoist.test',
            ]);
    }
}
