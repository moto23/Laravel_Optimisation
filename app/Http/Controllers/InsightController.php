<?php
namespace App\Http\Controllers;
session_start();

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use DateTime;
use DateTimeZone;
use Carbon\Carbon;

class InsightController extends Controller
{
    public function insights()
    {
        if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
            return redirect()->route('login')->with('error', 'You need to LOGIN to view this page.');
        }

        $teacher = DB::table('teacher')
            ->where('email', $_SESSION['email'])
            ->first();

        $results = DB::table('result')
            ->where('result.teacher_id', $teacher->teacher_id)
            ->leftJoin('championship', 'result.champ_id', '=', 'championship.champ_id')
            ->leftJoin('user', 'result.user_id', '=', 'user.user_id')
            ->select(
                'result.*',
                'championship.champ_name',
                'user.user_name',
                'user.user_key'
            )
            ->get();

        $processedResults = $results->map(function ($result, $index) {
            $playedOn = Carbon::parse($result->created_at, 'UTC')
                ->setTimezone('Asia/Kolkata')
                ->format('Y-m-d H:i:s');

            return [
                'serial_no' => $index + 1,
                'user_id' => $result->user_key,
                'user_name' => $result->user_name,
                'champ_name' => $result->champ_name ?? 'Unknown',
                'total_questions' => $result->total_questions,
                'correct_questions' => $result->correct_questions,
                'time_taken' => $result->time_taken,
                'total_score' => $result->total_score,
                'total_bonus' => $result->total_bonus,
                'total_penalty' => $result->total_penalty,
                'total_negative_points' => $result->total_negative_points,
                'played_on' => $playedOn
            ];
        });

        return view('insights', [
            'teacherName' => $teacher->teacher_name,
            'results' => $processedResults
        ]);
    }
}
