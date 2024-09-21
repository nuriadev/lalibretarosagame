<?php

namespace Database\Seeders;

use App\Models\CorrectAnswer;
use Illuminate\Database\Seeder;

class CorrectAnswersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CorrectAnswer::create([
            'outfit' => 1,
            'invitado' => 2,
            'acustica' => 1,
            'rosa' => 2,
            'electrica' => 1,
            'nueva' => 2,
            'otro' => 1,
            'piano' => 2,
            'conocemos' => 1,
            'fies' => 2,
            'primera' => 1,
        ]);
    }
}
