<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

    protected $guarded = [];

    public function taskList()
    {
        return $this->belongsTo(TasksList::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
