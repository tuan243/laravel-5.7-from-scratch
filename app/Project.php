<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Events\ProjectCreated;
use Illuminate\Support\Facades\Mail;

class Project extends Model
{
    protected $guarded = [];
    // protected $fillable = ['title', 'description'];
    protected $dispatchesEvents = [
        'created' => ProjectCreated::class
    ];

    public function owner() 
    {
        return $this->belongsTo(User::class);
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function addTask($task)
    {
        $this->tasks()->create($task);
    }
}
