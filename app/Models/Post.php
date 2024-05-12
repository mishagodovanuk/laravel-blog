<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @extends \Illuminate\Database\Eloquent\Model<\App\Models\Post>
 */
class Post extends Model
{
    use HasFactory;

    /**
     * @var string[]
     */
    protected $fillable = [
        'title',
        'content',
        'image',
    ];

    /**
     * @var string[]
     */
    protected $casts = [
        'content' => 'binary',
    ];

    /**
     * @var string[]
     */
    protected $hidden = [
        'user_id',
    ];
}
