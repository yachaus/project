<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title', 'description', 'owner_id'
    ];

    public function addTask($task){
        $this->tasks()->create($task);
    }
    public function tasks(){
        return $this->hasMany(Task::class);
    }

}
