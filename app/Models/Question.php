<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Question
 * @package App\Models
 *
 * @property string $name
 * @property string $question
 * @property integer $points
 * @property string $type
 *
 */
class Question extends Model
{
    use HasFactory;

    protected $fillable = [
      'name', 'question', 'points', 'type'
    ];
}
