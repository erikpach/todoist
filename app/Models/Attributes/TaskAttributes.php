<?php

namespace App\Models\Attributes;

use Illuminate\Database\Eloquent\Casts\Attribute;

trait TaskAttributes
{
    public function complete(): Attribute
    {
        return Attribute::get(
            fn (): bool => ! is_null($this->completed_at),
        );
    }
}
