<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Step extends Model
{
    use HasFactory;

    protected $table = 'steps';

    protected $fillable = [
        'name',
        'description',
        'image',
        'due_date',
        'task_id',
        'state_id'
    ];

    public function Task(): BelongsTo
    {
        return $this->belongsTo(Task::class, 'task_id');
    }

    public function Todo(): BelongsTo
    {
        return $this->belongsTo(Todo::class, 'state_id');
    }
}
