<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * Class Role
 *
 * @property string $name
 *
 * @package App\Models
 */
class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    /**
     * Which users have this role.
     *
     * @return BelongsToMany
     */
    public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }

    /**
     * What rights do we have.
     *
     * @return BelongsToMany
     */
    public function rights()
    {
        return $this->belongsToMany('App\Models\Right');
    }
}
