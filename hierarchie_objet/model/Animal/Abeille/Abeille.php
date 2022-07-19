<?php 

class Abeille extends Animal
{
    function __construct()
    {
        parent::__construct('Abeille');
        parent::setMove('Je me deplace en volant.');
        parent::setShout('Je bourdonne');
        
    }

    function eat(string $_food):void
    {
         (strtolower($_food)=== 'Nectar') ? parent::eat($_food) : parent::dontEat();
    }
  
}