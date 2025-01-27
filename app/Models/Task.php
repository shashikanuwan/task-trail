<?php

namespace App\Models;

use App\Enums\TaskPriority;
use App\Enums\TaskStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed|string $name
 * @property mixed|string $description
 * @property TaskPriority|mixed $priority
 * @property mixed $project_id
 * @property mixed $id
 */
class Task extends Model
{
    use HasFactory;

    protected $casts = [
        'priority' => TaskPriority::class,
        'status' => TaskStatus::class,
    ];
}
