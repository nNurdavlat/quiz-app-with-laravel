<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function home(){ return view('dashboard.home'); }

    public function quiz(){
        return view('dashboard.quizzes',[
            'quizzes'=>Quiz::withCount('questions')->get()
    ]);
    }

    public function statistics(){ return view('dashboard.statistics'); }
}
