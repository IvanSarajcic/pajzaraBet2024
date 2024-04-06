<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
    use HasFactory;

    // If you're following Laravel's naming conventions, specifying the table name is optional
    // protected $table = 'venues';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'city',
    ];

    /**
     * Get the matches played at this venue.
     */
    public function matches()
    {
        return $this->hasMany(FootballMatch::class, 'venue_id');
    }

    // Add any other methods or properties as needed...
}
