<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $array)
 */
class Advert extends Model
{
    use HasFactory;

    protected $fillable = ['image_path', 'no_of_display_time', 'impression_limit'];
}
