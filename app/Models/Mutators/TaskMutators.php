<?php

namespace App\Models\Mutators;

use App\Models\User;

trait TaskMutators
{
    public function setUserAttribute(User $user): void
    {
        $this->attributes['user_id'] = $user->getKey();

        $this->setRelation('user', $user);
    }
}
