<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TasksList extends Model
{
    protected $guarded = [];

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
