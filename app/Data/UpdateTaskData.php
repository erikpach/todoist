<?php

namespace App\Data;

use Illuminate\Http\Request;
use Spatie\LaravelData\Data;

class UpdateTaskData extends Data
{
    public function __construct(
        public string $name,
        public ?string $description,
    ) {
    }

    public static function fromRequest(Request $request): self
    {
        return new self(
            name: $request->input('name'),
            description: $request->input('description'),
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
