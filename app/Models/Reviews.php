<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reviews extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'author',
        'title',
        'summary',
        'rating',
        'imagePath',
        'email',
        'active',
        'user_id'
    ];

    /**
     * Get the post that owns the comment.
     */
    public function author()
    {
        return $this->belongsTo(User::class);
    }
}
