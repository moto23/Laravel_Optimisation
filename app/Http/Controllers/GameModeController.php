<?php
namespace App\Http\Controllers;
session_start();

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use DateTime;
use DateTimeZone;

class GameModeController extends Controller
{
    public function create()
    {
        if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
            return redirect()->route('login')->with('error', 'You need to LOGIN to view this page.');
        }

        $teacher = DB::table('teacher')
            ->where('email', $_SESSION['email'])
            ->first();

        $labels = DB::table('label')
            ->where('teacher_id', $teacher->teacher_id)
            ->pluck('label_name');

        $championships = DB::table('championship')
            ->where('teacher_id', $teacher->teacher_id)
            ->pluck('champ_name');

        $qualifications = DB::table('qualification')
            ->pluck('qualification_name');

        $gifts = DB::table('gift')
            ->select('gift_id', 'gift_type')
            ->get();

        return view('game_mode', [
            'teacherName' => $teacher->teacher_name,
            'labels' => $labels,
            'championships' => $championships,
            'qualifications' => $qualifications,
            'gifts' => $gifts
        ]);
    }

    public function all_modes()
    {
        if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
            return redirect()->route('login')->with('error', 'You need to LOGIN to view this page.');
        }

        $teacher = DB::table('teacher')
            ->where('email', $_SESSION['email'])
            ->first();

        $gameModes = DB::table('game_mode')
            ->where('teacher_id', $teacher->teacher_id)
            ->get();

        $processedModes = $gameModes->map(function ($mode, $index) {
            $gift = DB::table('chosen_gift_type')
                ->where('mode_id', $mode->mode_id)
                ->first();

            $labelId = DB::table('chosen_questions')
                ->where('mode_id', $mode->mode_id)
                ->value('label_id');

            $labelName = $labelId ? DB::table('label')
                ->where('label_id', $labelId)
                ->value('label_name') : null;

            $championship = DB::table('championship')
                ->where('champ_id', $mode->champ_id)
                ->first();

            $datetime = new DateTime($mode->created_at, new DateTimeZone('UTC'));
            $datetime->setTimezone(new DateTimeZone('Asia/Kolkata'));
            $istTime = $datetime->format('Y-m-d H:i:s');

            return [
                'serial_no' => $index + 1,
                'unique_id' => $mode->unique_id,
                'mode_id' => $mode->mode_id,
                'mode_name' => $mode->mode_name,
                'label_name' => $labelName,
                'champ_name' => $championship ? $championship->champ_name : null,
                'gift_type' => $gift ? $gift->gift_type : null,
                'gift_name' => $gift ? $gift->gift_name : null,
                'no_of_question' => $mode->no_of_question,
                'time_minutes' => $mode->time_minutes,
                'user_qualification' => $mode->user_qualification,
                'created_at_ist' => $istTime
            ];
        });

        return view('all_game_modes', [
            'teacherName' => $teacher->teacher_name,
            'modes' => $processedModes
        ]);
    }

    public function store(Request $request)
    {
        if ($request->has('champ_id') && $request->champ_id) {
            $validated = $request->validate([
                'champ_name' => 'required|string|max:255',
                'start_date' => 'required|date',
                'end_date' => 'required|date|after_or_equal:start_date',
                'start_time' => 'required',
                'end_time' => 'required',
                'champ_id' => 'required'
            ], [
                'champ_name.required' => 'Championship name is required',
                'champ_name.max' => 'Championship name cannot exceed 255 characters',
                'start_date.required' => 'Start date is required',
                'end_date.required' => 'End date is required',
                'end_date.after_or_equal' => 'End date must be after or equal to start date',
                'start_time.required' => 'Start time is required',
                'end_time.required' => 'End time is required',
            ]);

            $teacher = DB::table('teacher')
                ->where('email', $_SESSION['email'])
                ->first();

            // $exists = DB::table('championship')
            //     ->where('teacher_id', $teacher->teacher_id)
            //     ->where('champ_name', $validated['champ_name'])
            //     ->exists();

            // if ($exists) {
            //     return redirect('/all_championships')
            //         ->with('error', 'Championship already exists.');
            // }

            DB::table('championship')
                ->where('unique_id', $validated['champ_id'])
                ->update([
                    'champ_name' => $validated['champ_name'],
                    'start_date' => $validated['start_date'],
                    'start_time' => $validated['start_time'],
                    'end_date' => $validated['end_date'],
                    'end_time' => $validated['end_time']
                ]);

            return redirect('/all_championships')
                ->with('success', 'Championship updated successfully!');
        } else {
            $validated = $request->validate([
                'champ_name' => 'required|string|max:255',
                'categories' => 'required|array',
                'start_date' => 'required|date',
                'end_date' => 'required|date|after_or_equal:start_date',
                'start_time' => 'required',
                'end_time' => 'required'
            ], [
                'champ_name.required' => 'Championship name is required',
                'champ_name.max' => 'Championship name cannot exceed 255 characters',
                'categories.required' => 'At least one category must be selected',
                'start_date.required' => 'Start date is required',
                'end_date.required' => 'End date is required',
                'end_date.after_or_equal' => 'End date must be after or equal to start date',
                'start_time.required' => 'Start time is required',
                'end_time.required' => 'End time is required',
            ]);

            $teacher = DB::table('teacher')
                ->where('email', $_SESSION['email'])
                ->first();

            if (!$teacher) {
                return redirect()->back()->with('error', 'Teacher not found');
            }

            $exists = DB::table('championship')
                ->where('teacher_id', $teacher->teacher_id)
                ->where('champ_name', $validated['champ_name'])
                ->exists();

            if ($exists) {
                return redirect('/all_championships')
                    ->with('error', 'Championship name already exists. Try editing the current championships.');
            }

            foreach ($validated['categories'] as $category) {
                $categoryRecord = DB::table('category')
                    ->where('category_name', $category)
                    ->first();

                if (!$categoryRecord) {
                    continue;
                }

                $char_string = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                $string = '';
                while (strlen($string) < 4) {
                    $string .= $char_string[random_int(0, strlen($char_string) - 1)];
                }
                $code = rand(1, 9999);
                $unique_id = $string . "_" . $code;

                DB::table('championship')->insert([
                    'champ_name' => $validated['champ_name'],
                    'category_id' => $categoryRecord->category_id,
                    'teacher_id' => $teacher->teacher_id,
                    'start_date' => $validated['start_date'],
                    'end_date' => $validated['end_date'],
                    'start_time' => $validated['start_time'],
                    'end_time' => $validated['end_time'],
                    'status' => 0,
                    'unique_id' => $unique_id,
                    'created_at' => now()
                ]);
            }

            return redirect()->route('championship.new')
                ->with('success', 'Championship added successfully!');
        }
    }
}