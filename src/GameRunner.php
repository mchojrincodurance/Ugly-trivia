<?php

include __DIR__ . '/Game.php';

$notAWinner;

$aGame = new Game();

$aGame->add("Chet");
$aGame->add("Pat");
$aGame->add("Sue");

do {
    $aGame->roll(random_int(0, 5) + 1);

    if (random_int(0, 9) == 7) {
        $notAWinner = $aGame->wrongAnswer();
    } else {
        $notAWinner = $aGame->wasCorrectlyAnswered();
    }
} while ($notAWinner);
