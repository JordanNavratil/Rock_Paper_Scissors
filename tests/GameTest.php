<?php


    require_once "src/Game.php";


    class GameTest extends PHPUnit_Framework_TestCase
    {


        function test_checkType()
        {
            //Arrange
            $game = new Game;
            $input_1 = "rock";
            $input_2 = "scissors";

            //Act
            $result = $game->shoot($input_1, $input_2);

            // Assert
            $this->assertEquals("player 1", $result);
     }
 }

?>
