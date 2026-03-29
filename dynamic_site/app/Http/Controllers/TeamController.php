<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Team;

class TeamController extends Controller
{
     public function index()
    {
        $teams = Team::active()->get();

        return view('pages.team', compact('teams'));
    }
}



