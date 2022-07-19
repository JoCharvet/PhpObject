<?php

class Herbivore extends Animal
{
    private array $veggie=['herbe','foin',"feuille"];

    function eat(string $_food):void
    {
        (in_array($_food,$this->veggie))? parent::eat($_food):parent::dontEat();
    }
}