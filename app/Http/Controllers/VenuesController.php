<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venue;

class VenuesController extends Controller
{
    public function index()
    {
        $venues = Venue::all(); // Fetch all venues
        return view('venues.index', compact('venues')); // Pass venues to the view
    }
}