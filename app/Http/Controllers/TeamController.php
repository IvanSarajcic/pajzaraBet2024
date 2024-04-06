<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::all(); // Fetch all teams
        return view('teams.index', compact('teams')); // Pass teams to the view
    }
}
