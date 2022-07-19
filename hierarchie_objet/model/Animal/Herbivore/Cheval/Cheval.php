<?php 

class Cheval extends Herbivore
{
    function __construct()
    {
        parent::__construct('Cheval');
        parent::setShout('Je hennis');
    }
    
    function eat($_food):void
    {
        ($_food === 'herbe'||$_food==='foin')?parent::eat($_food) : parent::dontEat();
    }
}