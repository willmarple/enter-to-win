<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;


/**
 * Class Entry
 *
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 */
class Entry extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function winner(): HasOne
    {
        return $this->hasOne(Winner::class);
    }
}
