<?php

namespace App\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use SoftDeletes;
    protected $fillable = ['task', 'status'];
}
