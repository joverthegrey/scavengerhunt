<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * Class Right
 * @package App\Models
 *
 * @property string $name
 */
class Right extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    /**
     * Return the roles which have this right
     *
     * @return BelongsToMany
     */
    public function roles()
    {
        return $this->belongsToMany('\App\Models\Role');
    }
}
