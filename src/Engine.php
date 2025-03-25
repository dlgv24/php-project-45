<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

const WIN_MSG = "Congratulations, %s!";
const LOSE_MSG = "'%s' is wrong answer ;(. Correct answer was '%s'.\nLet's try again, %s!";

function gameEngine(string $name, string $description, array $questions, array $answers): void
{
    line($description);
    $endMsg = sprintf(WIN_MSG, $name);
    for ($i = 0; $i < 3; $i++) {
        line("Question: %s", $questions[$i]);
        $answer = prompt("Your answer");
        if ($answer === $answers[$i]) {
            line("Correct!");
        } else {
            $endMsg = sprintf(LOSE_MSG, $answer, $answers[$i], $name);
            break;
        }
    }
    line($endMsg);
}
