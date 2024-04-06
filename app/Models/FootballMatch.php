<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FootballMatch extends Model
{
    use HasFactory;

    // If you chose to rename the 'matches' table, specify it here. Otherwise, it's optional.
    protected $table = 'matches';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'kick_off',
        'venue_id',
        'team_home_id',
        'team_away_id',
        'finished',
        'goals_team_home',
        'goals_team_away',
    ];

    /**
     * Get the venue associated with the match.
     */
    public function venue()
    {
        return $this->belongsTo(Venue::class, 'venue_id');
    }

    /**
     * Get the home team associated with the match.
     */
    public function teamHome()
    {
        return $this->belongsTo(Team::class, 'team_home_id');
    }

    /**
     * Get the away team associated with the match.
     */
    public function teamAway()
    {
        return $this->belongsTo(Team::class, 'team_away_id');
    }
}
