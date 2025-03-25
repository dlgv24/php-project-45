<?php

namespace BrainGames\Games\CalcGame;

use function BrainGames\Cli\greet;
use function BrainGames\Engine\gameEngine;

const DESCRIPTION = 'What is the result of the expression?';

function randExpr(): array
{
    $num1 = rand(1, 100);
    $num2 = rand(1, 100);
    $op = rand(0, 2);

    switch ($op) {
        case 0:
            $res = $num1 + $num2;
            $expr = "{$num1} + {$num2}";
            break;
        case 1:
            $res = $num1 - $num2;
            $expr = "{$num1} - {$num2}";
            break;
        case 2:
            $res = $num1 * $num2;
            $expr = "{$num1} * {$num2}";
            break;
    }

    return [
        'expression' => $expr,
        'answer' => (string) $res
    ];
}

function run(): void
{
    $name = greet();

    $questions = [];
    $answers = [];
    for ($i = 0; $i < 3; $i++) {
        $res = randExpr();
        $questions[] = $res['expression'];
        $answers[] = $res['answer'];
    }

    gameEngine($name, DESCRIPTION, $questions, $answers);
}
