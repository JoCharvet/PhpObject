<?php 

class Girafe extends Herbivore
{
    function __construct()
    {
       parent::__construct('Girafe');
       parent::setShout('Je meugle.');
       parent::setMove('Je me deplace lentement.');
    }

    
}