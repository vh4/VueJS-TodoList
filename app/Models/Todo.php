<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;
    protected $table = 'todo';
    protected $fillable = ['user_id','list', 'description', 'completed', 'complete_date'];
    public $timestamps = false;
}
