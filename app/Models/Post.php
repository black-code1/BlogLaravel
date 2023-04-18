<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static findOrFail(string $id)
 * @method static paginate(int $int)
 * @property mixed $slug
 */
class Post extends Model
{
    use HasFactory;

    protected $fillable = [
      'title',
      'slug',
      'content'
    ];
}
