<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;
    
    // Assuming posts table with id, title, content, created_at, updated_at columns
    protected $fillable = ['title', 'content'];
    
    // By default, Laravel will use the plural of the model name as the table name
    // If your table name is different, you can specify it here:
    // protected $table = 'posts';
}
