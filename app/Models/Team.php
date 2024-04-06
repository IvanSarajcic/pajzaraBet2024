<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'abbreviation',
        'group',
        'sort_order',
    ];

    /**
     * Get the home matches for the team.
     */
    public function homeMatches()
    {
        return $this->hasMany(FootballMatch::class, 'team_home_id');
    }

    /**
     * Get the away matches for the team.
     */
    public function awayMatches()
    {
        return $this->hasMany(FootballMatch::class, 'team_away_id');
    }

    // Optionally, if you want to combine both home and away matches into a single relationship
    public function matches()
    {
        return $this->homeMatches->merge($this->awayMatches);
    }
}
