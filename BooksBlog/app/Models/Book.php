<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = [
        "title",
        "auther",
        "description",
        "publish_year",
        "downloads",
        "avatar_path",
        "file_path"

    ];

}
