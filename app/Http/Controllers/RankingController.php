<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ranking;
use App\Models\Prediction;
use App\Models\CorrectAnswer;
use Carbon\Carbon;

class RankingController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function ranking()
    {
        return view('rankings.index');
    }

    public function getRankings(Request $request)
{
    // Check if a token is provided
    $token = $request->query('token');
    if ($token) {
        $prediction = Prediction::where('token', $token)
            ->where('token_expiry', '>', Carbon::now())
            ->first();

        if ($prediction) {
            // Check if correct answers are available
            $correctAnswers = $this->getCorrectAnswers();
            $score = 0;

            if (!is_null($correctAnswers)) {
                // Calculate the score for the user's prediction
                foreach ($correctAnswers as $question => $correctAnswer) {
                    if ($prediction->$question == $correctAnswer) {
                        $score += 10; // Each correct answer is worth 10 points
                    }
                }
            }

            return response()->json([
                'user_identifier' => $prediction->user_identifier,
                'score' => $score
            ]);
        } else {
            return response()->json(['message' => 'Token inválido o expirado.'], 400);
        }
    }

    // Check if correct answers are available
    $correctAnswers = $this->getCorrectAnswers();
    $predictions = Prediction::all();

    if (is_null($correctAnswers)) {
        // If correct answers are not available, return all users with a score of 0
        $rankings = $predictions->map(function ($prediction) {
            return [
                'user_identifier' => $prediction->user_identifier,
                'score' => 0
            ];
        });
    } else {
        // Calculate scores for each prediction
        $rankings = $predictions->map(function ($prediction) use ($correctAnswers) {
            $score = 0;
            foreach ($correctAnswers as $question => $correctAnswer) {
                if ($prediction->$question == $correctAnswer) {
                    $score += 10; // Each correct answer is worth 10 points
                }
            }
            return [
                'user_identifier' => $prediction->user_identifier,
                'score' => $score
            ];
        });

        // Sort rankings by score in descending order
        $rankings = $rankings->sortByDesc('score')->values();
    }

    return response()->json($rankings);
}

private function getCorrectAnswers()
{
    // Fetch correct answers from the database
    $correctAnswer = CorrectAnswer::first();
    if ($correctAnswer) {
        return $correctAnswer->toArray();
    }
    return null;
}
}
