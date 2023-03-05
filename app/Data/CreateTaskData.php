<?php

namespace App\Data;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\LaravelData\Attributes\WithoutValidation;
use Spatie\LaravelData\Data;

class CreateTaskData extends Data
{
    public function __construct(
        public string $name,
        public ?string $description,
        #[WithoutValidation]
        public User $user,
    ) {
    }

    public static function fromRequest(Request $request): self
    {
        return new self(
            name: $request->input('name'),
            description: $request->input('description'),
            user: $request->user(),
        );
    }

    public static function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
        ];
    }
}
