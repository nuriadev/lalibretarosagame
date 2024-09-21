<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prediction;
use App\Models\Ranking;
use Illuminate\Support\Str;
use Carbon\Carbon;

class PredictionController extends Controller
{
    public function store(Request $request)
{
    $request->validate([
        'user_identifier' => 'required|string|max:255',
        'outfit' => 'required|integer',
        'invitado' => 'required|integer',
        'acustica' => 'required|integer',
        'rosa' => 'required|integer',
        'electrica' => 'required|integer',
        'nueva' => 'required|integer',
        'otro' => 'required|integer',
        'piano' => 'required|integer',
        'conocemos' => 'required|integer',
        'fies' => 'required|integer',
        'primera' => 'required|integer',
    ]);

    // Generate a unique token
    $token = Str::random(60);
    $tokenExpiry = Carbon::now()->addHours(12);

    // Save the prediction to the database
    $prediction = new Prediction();
    $prediction->user_identifier = $request->user_identifier;
    $prediction->outfit = $request->outfit;
    $prediction->invitado = $request->invitado;
    $prediction->acustica = $request->acustica;
    $prediction->rosa = $request->rosa;
    $prediction->electrica = $request->electrica;
    $prediction->nueva = $request->nueva;
    $prediction->otro = $request->otro;
    $prediction->piano = $request->piano;
    $prediction->conocemos = $request->conocemos;
    $prediction->fies = $request->fies;
    $prediction->primera = $request->primera;
    $prediction->save();

    // Redirect back with a success message
    return redirect()->back()->with('success', 'Predicción enviada correctamente.');
}

protected function checkPrediction($prediction)
{
    // Aquí iría la lógica para determinar si la predicción es correcta o no
    return rand(0, 1) == 1; // Ejemplo: 50% de acierto al azar
}

protected function updateRanking($userIdentifier)
{
    $ranking = Ranking::firstOrNew(['user_identifier' => $userIdentifier]);
    $ranking->score += 1;
    $ranking->save();
}
}
