<?php

namespace Database\Factories;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    public function completed(Carbon $completedAt = null): self
    {
        return $this->state([
            'completed_at' => $completedAt ?? now(),
        ]);
    }

    public function definition(): array
    {
        return [
            'name' => fake()->sentence,
            'description' => fake()->paragraph,
            'completed_at' => null,
            'user_id' => User::factory(),
        ];
    }
}
