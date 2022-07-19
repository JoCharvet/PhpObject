<?php 

class Labrador extends Dog
{
    private bool $rand=false;

    function __construct(string $_name)
    {
        parent::__construct($_name);
    }

    function move() :void{

        
        if($this->rand)
        {
            parent::move();
        }
        else
        {
            echo parent::getSpecie().' : refuse d\'avancer'.PHP_EOL;
        }
        $this->rand=!$this->rand;
    }
}