<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
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
        "file_path",
        "user_id",

    ];
    public function user(): BelongsTo
    {
    return $this->belongsTo(User::class, 'foreign_key');
    }

}
