<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'isbn', 'image_path' ,'author', 'publisher', 'pages', 'language', 'subjects', 'desc', 'category', 'publish_date'];
    protected $guard = ['id'];
}
