<?php
namespace App\Http\Controllers;
session_start();

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function show()
    {
        if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
            return redirect()->route('login')->with('error', 'You need to LOGIN to view this page.');
        }

        $teacher = DB::table('teacher')
            ->where('email', $_SESSION['email'])
            ->first();

        return view('contact', [
            'teacherName' => $teacher->teacher_name
        ]);
    }
}