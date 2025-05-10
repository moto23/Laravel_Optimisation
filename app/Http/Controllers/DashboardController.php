<?php

namespace App\Http\Controllers;
session_start();
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
            return redirect()->route('login')->with('error', 'You need to LOGIN to view this page.');
        }

        // $email = session('email');
        $teacher = DB::table('teacher')
            ->where('email', $_SESSION['email'])
            ->first();

        $championshipCount = DB::table('championship')
            ->where('teacher_id', $teacher->teacher_id)
            ->count();

        $userCount = DB::table('result')
            ->where('teacher_id', $teacher->teacher_id)
            ->count();

        $gameModeCount = DB::table('game_mode')
            ->where('teacher_id', $teacher->teacher_id)
            ->count();

        $categoryCount = DB::table('category')->count();

        return view('dashboard', [
            'teacherName' => $teacher->teacher_name,
            'championshipCount' => $championshipCount,
            'userCount' => $userCount,
            'categoryCount' => $categoryCount,
            'gameModeCount' => $gameModeCount
        ]);
    }
}