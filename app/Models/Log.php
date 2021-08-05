<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'task_id',
        'comment',
        'date',
    ];

    public function url()
    {
        return 'logs.store';
    }

    public function method()
    {
        return 'POST';
    }
}
