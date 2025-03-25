<?php

namespace BrainGames\Games\PrimeGame;

use function BrainGames\Cli\greet;
use function BrainGames\Engine\gameEngine;

const DESCRIPTION = 'Answer "yes" if given number is prime. Otherwise answer "no".';


function isPrime(int $number): bool
{
    if ($number < 2) {
        return false;
    }
    $sqrt = sqrt($number);
    for ($i = 2; $i <= $sqrt; $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

function run(): void
{
    $name = greet();

    $questions = [];
    $answers = [];
    for ($i = 0; $i < 3; $i++) {
        $number = rand(1, 150);
        $questions[] = (string) $number;
        $answers[] = isPrime($number) ? 'yes' : 'no';
    }

    gameEngine($name, DESCRIPTION, $questions, $answers);
}
