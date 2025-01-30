<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Todo extends Model
{

    use HasFactory; // Add this line
    protected $fillable = ['title', 'description', 'completed'];
}
