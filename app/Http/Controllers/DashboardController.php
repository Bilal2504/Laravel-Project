<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $games = Game::query()->paginate(10);
        return view('dashboard', compact('games'));
    }
}
