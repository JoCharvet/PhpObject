<?php 

abstract class Animal
{
    private string $specie;
    private string $shout='Cri';
    private string $move='Je me deplace.';

    function __construct(string $_specie)
    {
        $this->specie=$_specie;
    }

    protected function setShout(string $_shout):void
    {
        $this->shout=$_shout;
    }

    protected function setMove(string $_move):void
    {
        $this->move=$_move;
    }

    function getSpecie():string
    {
        return $this->specie;
    }

    function eat(string $_food):void
    {
        echo $this->specie.' : Je mange '.$_food.'.'.PHP_EOL;
    }

    function move():void
    {
        echo $this->specie.' : '.$this->move.PHP_EOL;
    }

    function shout():void
    {
        echo $this->specie.' : '.$this->shout.PHP_EOL;
    }

    function dontEat():void
    {
        echo  $this->specie.' : Je ne mange pas ça'.PHP_EOL;
    }

}