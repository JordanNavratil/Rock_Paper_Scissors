<?php


    require_once "src/Game.php";


    class GameTest extends PHPUnit_Framework_TestCase
    {


        function test_checkType()
        {
            //Arrange
            $game = new Game;
            $option_1 = "rock";
            $option_2 = "rock";

            //Act
            $result = $game->shoot($option_1, $option_2);

            // Assert
            $this->assertEquals("Draw", $result);
     }
 }

?>
