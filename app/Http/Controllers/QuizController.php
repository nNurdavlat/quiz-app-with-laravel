<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.create-quiz');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validater = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'timeLimit' => 'required|integer',
            'questions' => 'required|array',
        ]);

        $quiz=Quiz::create([
            'user_id'=>auth()->id(),
            'title' => $validater['title'],
            'description' => $validater['description'],
            'timeLimit' => $validater['timeLimit'],
        ]);
//        foreach ($validater['questions'] as $question) {
//            $quiz->questions()->create([]);
//        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
