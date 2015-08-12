<?php

    class Game
    {

        function shoot($input_1, $input_2) {
            if ($input_1 === 'rock' && $input_2 === 'scissors') {
                return 'player 1';
            }

            elseif ($input_1 === 'rock' && $input_2 === 'paper') {
                return "player 2";
            }

            elseif ($input_1 === 'scissors' && $input_2 === 'paper') {
                return "player 1";
            }

            elseif ($input_1 === 'scissors' && $input_2 === 'rock') {
                return "player 2";

            }

            elseif ($input_1 === 'paper' && $input_2 === 'scissors') {
                return "player 1";
            }

            elseif ($input_1 === 'paper' && $input_2 === 'rock') {
                return "player 2";
            }

            else {
                return "draw"; }

            }
    }

?>
