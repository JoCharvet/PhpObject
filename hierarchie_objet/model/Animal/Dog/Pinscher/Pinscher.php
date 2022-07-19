<?php 

class Pinscher extends Dog
{
    function __construct(string $_name)
    {
        parent::__construct($_name);
    }

    function move():void
    {
        $this->shout();
        parent::move();
    }
}