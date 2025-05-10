<?php
namespace App\Http\Controllers;
session_start();

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use DateTime;
use DateTimeZone;

class AnalyticsController extends Controller
{
    public function show()
    {
        if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
            return redirect()->route('login')->with('error', 'You need to LOGIN to view this page.');
        }

        $teacher = DB::table('teacher')
            ->where('email', $_SESSION['email'])
            ->first();

        $analyticsData = DB::table('result')
            ->where('result.teacher_id', $teacher->teacher_id)
            ->join('result_per_question', 'result_per_question.user_id', '=', 'result.user_id')
            ->join('championship', 'championship.champ_id', '=', 'result.champ_id')
            ->join('user', 'user.user_id', '=', 'result.user_id')
            ->join('question', 'question.question_id', '=', 'result_per_question.question_id')
            ->select(
                'championship.champ_name',
                'championship.start_date',
                'championship.end_date',
                'user.user_name',
                'question.question_text',
                'result_per_question.expected_time',
                'result_per_question.time_taken',
                'result_per_question.correct_ans',
                'result_per_question.submitted_ans',
                'result_per_question.points',
                'result_per_question.created_at'
            )
            ->orderBy('result_per_question.created_at')
            ->get()
            ->map(function ($item, $index) {
                // Convert UTC to IST
                $datetime = new DateTime($item->created_at, new DateTimeZone('UTC'));
                $datetime->setTimezone(new DateTimeZone('Asia/Kolkata'));
                $date = $datetime->format('Y-m-d');

                return [
                    'serial_no' => $index + 1,
                    'champ_name' => $item->champ_name ?? 'N/A',
                    'start_date' => $item->start_date ?? 'N/A',
                    'end_date' => $item->end_date ?? 'N/A',
                    'user_name' => $item->user_name ?? 'N/A',
                    'question_text' => $item->question_text ?? 'N/A',
                    'expected_time' => $item->expected_time ?? 'N/A',
                    'time_taken' => $item->time_taken ?? 'N/A',
                    'correct_ans' => $item->correct_ans ?? 'N/A',
                    'submitted_ans' => $item->submitted_ans ?? 'N/A',
                    'points' => $item->points ?? 'N/A',
                    'date' => $date
                ];
            });

        return view('champ_analytics', [
            'teacherName' => $teacher->teacher_name,
            'analytics' => $analyticsData
        ]);

        // $results = DB::table('result')
        //     ->where('teacher_id', $teacher->teacher_id)
        //     ->get();

        // $analyticsData = [];
        // $serialNo = 1;

        // foreach ($results as $result) {
        //     // Get questions for this user from result_per_question
        //     $questions = DB::table('result_per_question')
        //         ->where('user_id', $result->user_id)
        //         ->get();

        //     foreach ($questions as $question) {
        //         // Get championship details
        //         $championship = DB::table('championship')
        //             ->where('champ_id', $result->champ_id)
        //             ->first();

        //         // Get user details
        //         $user = DB::table('user')
        //             ->where('user_id', $result->user_id)
        //             ->first();

        //         // Get question details
        //         $questionDetails = DB::table('question')
        //             ->where('question_id', $question->question_id)
        //             ->first();

        //         // Convert UTC to IST
        //         $datetime = new DateTime($question->created_at, new DateTimeZone('UTC'));
        //         $datetime->setTimezone(new DateTimeZone('Asia/Kolkata'));
        //         $date = $datetime->format('Y-m-d');

        //         $analyticsData[] = [
        //             'serial_no' => $serialNo++,
        //             'champ_name' => $championship->champ_name ?? 'N/A',
        //             'start_date' => $championship->start_date ?? 'N/A',
        //             'end_date' => $championship->end_date ?? 'N/A',
        //             'user_name' => $user->user_name ?? 'N/A',
        //             'question_text' => $questionDetails->question_text ?? 'N/A',
        //             'expected_time' => $question->expected_time ?? 'N/A',
        //             'time_taken' => $question->time_taken ?? 'N/A',
        //             'correct_ans' => $question->correct_ans ?? 'N/A',
        //             'submitted_ans' => $question->submitted_ans ?? 'N/A',
        //             'points' => $question->points ?? 'N/A',
        //             'date' => $date
        //         ];
        //     }
        // }

        // return view('champ_analytics', [
        //     'teacherName' => $teacher->teacher_name,
        //     'analytics' => $analyticsData
        // ]);
    }
}