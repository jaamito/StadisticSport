<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teams;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      /*

        $team = new Teams();
        $team->idTeam = 100;
        $team->nameTeam = "Real Madrid";
        $team->save();

      */
        return view('home');
    }
}
