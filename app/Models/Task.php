<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'tasks';

    protected $primaryKey = 'id';

    protected $fillable = [
        'title',
        'status',
        'task_date',
    ];

    protected $attributes = [
        'status' => 'pending',
    ];

    protected $casts = [
        'task_date' => 'date',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
