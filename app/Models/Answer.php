<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Answer
 * @package App\Models
 *
 * @property string $answer
 * @property integer $points
 * @property boolean $graded
 */
class Answer extends Model
{
    use HasFactory;
}
