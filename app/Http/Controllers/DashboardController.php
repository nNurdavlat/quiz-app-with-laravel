<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function home(){ return view('dashboard.home'); }

    public function quiz(){ return view('dashboard.quizzes'); }

    public function statistics(){ return view('dashboard.statistics'); }
}
