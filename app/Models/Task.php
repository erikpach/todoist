<?php

namespace App\Models;

use App\Models\Attributes\TaskAttributes;
use App\Models\Mutators\TaskMutators;
use App\Models\Relations\TaskRelations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Task
 *
 * @property int                             $id
 * @property string                          $name
 * @property string|null                     $description
 * @property \Illuminate\Support\Carbon|null $completed_at
 * @property int                             $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read bool                       $complete
 * @property-read \App\Models\User           $user
 * @method static \Database\Factories\TaskFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Task newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Task newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Task query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Task whereCompletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Task whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Task whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Task whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Task whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Task whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Task whereUserId($value)
 * @mixin \Eloquent
 */
class Task extends Model
{
    use HasFactory;
    use TaskAttributes;
    use TaskMutators;
    use TaskRelations;

    protected $appends = [
        'complete',
    ];

    protected $casts = [
        'completed_at' => 'datetime',
    ];

    protected $guarded = [];
}
