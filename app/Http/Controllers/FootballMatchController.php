<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FootballMatch;

class FootballMatchController extends Controller
{
    public function index()
    {
        $matches = FootballMatch::all(); // Fetch all matches
        return view('matches.index', compact('matches')); // Pass matches to the view
    }
}