<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    public $timestamps = false;
    
    protected $fillable = [
        'description', 
        'end_date', 
        'user_id'
    ];

    public function User(){
        return $this->belongsTo(Task::class);
    }

    public function url()
    {
        return 'task.store';
    }

    public function method()
    {
        return 'POST';
    }

    public function logs(){
        return $this->hasMany(Log::class);
    }
}
