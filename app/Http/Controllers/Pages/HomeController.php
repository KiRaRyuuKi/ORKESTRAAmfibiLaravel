<?php

namespace App\Http\Controllers\Pages;

use App\Models\Activity;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

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
        $activities = Activity::latest()->limit(5)->get();

        return view('pages.home', compact('activities'));
    }

}
