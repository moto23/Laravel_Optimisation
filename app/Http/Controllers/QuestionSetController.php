<?php
namespace App\Http\Controllers;
session_start();

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use DateTime;
use DateTimeZone;

class QuestionSetController extends Controller
{
    public function create()
    {

        if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
            return redirect()->route('login')->with('error', 'You need to LOGIN to view this page.');
        }

        $teacher = DB::table('teacher')
            ->where('email', $_SESSION['email'])
            ->first();

        return view('question_set', [
            'teacherName' => $teacher->teacher_name
        ]);
    }

    public function all_set()
    {

        if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
            return redirect()->route('login')->with('error', 'You need to LOGIN to view this page.');
        }

        $teacher = DB::table('teacher')
            ->where('email', $_SESSION['email'])
            ->first();

        $labels = DB::table('label')
            ->where('teacher_id', $teacher->teacher_id)
            ->get()
            ->map(function ($label) {
                $utcTime = $label->created_at;
                $datetime = new DateTime($utcTime, new DateTimeZone('UTC'));
                $datetime->setTimezone(new DateTimeZone('Asia/Kolkata'));
                $label->created_at_ist = $datetime->format('Y-m-d H:i:s');
                return $label;
            });

        return view('all_sets', [
            'teacherName' => $teacher->teacher_name,
            'labels' => $labels
        ]);
    }

    public function store(Request $request)
    {
        if ($request->has('label_id') && $request->label_id) {
            $validated = $request->validate([
                'label_name' => 'required|string|max:255',
                'label_id' => 'required'
            ], [
                'label_name.required' => 'Question Set name is required',
            ]);

            $teacher = DB::table('teacher')
                ->where('email', $_SESSION['email'])
                ->first();

            $exists = DB::table('label')
                ->where('teacher_id', $teacher->teacher_id)
                ->where('label_name', $validated['label_name'])
                ->exists();

            if ($exists) {
                return redirect('/all_sets')
                    ->with('error', 'Label name already exists.');
            }

            DB::table('label')
                ->where('unique_id', $validated['label_id'])
                ->update([
                    'label_name' => $validated['label_name'],
                ]);

            return redirect('/all_sets')
                ->with('success', 'Question Set updated successfully!');
        } else {
            $validated = $request->validate([
                'label_name' => 'required|string|max:255'
            ], [
                'label_name.required' => 'Question Set name is required',
            ]);

            $teacher = DB::table('teacher')
                ->where('email', $_SESSION['email'])
                ->first();

            $exists = DB::table('label')
                ->where('teacher_id', $teacher->teacher_id)
                ->where('label_name', $validated['label_name'])
                ->exists();

            if ($exists) {
                return redirect('/all_sets')
                    ->with('error', 'Label name already exists. Try editing the current Labels');
            }

            $char_string = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $string = '';
            while (strlen($string) < 4) {
                $string .= $char_string[random_int(0, strlen($char_string) - 1)];
            }
            $code = rand(1, 9999);
            $unique_id = $string . "_" . $code;

            DB::table('label')->insert([
                'teacher_id' => $teacher->teacher_id,
                'label_name' => $validated['label_name'],
                'status' => 0,
                'unique_id' => $unique_id,
                'created_at' => now()
            ]);

            return redirect()->route('question_set.new')
                ->with('success', 'Question Set added successfully!');
        }
    }
}