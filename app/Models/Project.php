<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property mixed|string $name
 * @property mixed|string $description
 * @property mixed $id
 */
class Project extends Model
{
    use HasFactory;

    public function tasks(): HasMany
    {
        return $this->hasMany(Task::class);
    }
}
