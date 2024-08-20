<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        $courses = [
            ['name' => 'Math 101', 'progress' => 70],
            ['name' => 'Bangla 101', 'progress' => 50],
            ['name' => 'GK 101', 'progress' => 90],
        ];

        $exams = [
            ['title' => 'BCS Preliminary Exam','id'=>'1', 'due_date' => '2024-08-25'],
            ['title' => 'NSI Preliminary Exam','id'=>'2',  'due_date' => '2024-08-27'],
            ['title' => 'Petrobangla Preliminary Exam','id'=>'3',  'due_date' => '2024-08-30'],
        ];

        $grades = [
            ['course' => 'BCS Preliminary Exam', 'grade' => '80%'],
            ['course' => 'NSI Preliminary Exam', 'grade' => '95%'],
            ['course' => 'Petrobangla Preliminary Exam', 'grade' => '78%'],
        ];

        $announcements = [
            ['message' => 'Midterm exams start next week.','date' => '2024-08-25','type'=>'exam'],
            ['message' => 'New course materials available for download.','date' => '2024-08-27','type'=>'download'],
        ];

        return view('dashboard', compact('courses', 'exams', 'grades', 'announcements'));
    }
}
