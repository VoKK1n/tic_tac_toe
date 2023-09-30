<?php
namespace VoKK1n\tic_tac_toe\Controller;
use function VoKK1n\tic_tac_toe\View\showGame;

function startGame(){
   echo "Game started" .PHP_EOL;
   showGame();
}
?>