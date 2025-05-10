<?php
namespace App\Http\Controllers;
session_start();

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function all_category()
    {
        if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
            return redirect()->route('login')->with('error', 'You need to LOGIN to view this page.');
        }

        $teacher = DB::table('teacher')
            ->where('email', $_SESSION['email'])
            ->first();

        $categories = DB::table('category')
            ->get()
            ->map(function ($category) {
                return $category;
            });

        return view('all_categories', [
            'teacherName' => $teacher->teacher_name,
            'categories' => $categories
        ]);
    }
}