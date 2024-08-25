<?php

namespace App\Http\Controllers;

use App\Models\ExamResult;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function index()
    {
        $examResults = ExamResult::first(); // Fetch the first record

        if (!$examResults) {
            // Handle the case where there is no data
            $data = [
                'correct' => 0,
                'wrong' => 0,
                'not_answered' => 0,
                'total' => 0,
            ];
        } else {
            $data = [
                'correct' => $examResults->correct_answers,
                'wrong' => $examResults->wrong_answers,
                'not_answered' => $examResults->not_answered,
                'total' => $examResults->total_questions,
            ];
        }

        return view('exam-chart', compact('data'));
    }
}

