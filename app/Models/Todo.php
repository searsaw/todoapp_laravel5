<?php

namespace TodoApp\Models;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $fillable = ['description', 'completed', 'user_id'];

    public function scopeNotCompleted($query)
    {
        return $query->where('completed', false);
    }

    public function user()
    {
        return $this->belongsTo('TodoApp\Models\User');
    }

    public function isCompleted()
    {
        return $this->completed;
    }
}
