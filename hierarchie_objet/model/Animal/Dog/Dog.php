<?php 

abstract class Dog extends Animal
{
    private $name;

    function __construct(string $_name)
    {
        parent::__construct('Chien');
        parent::setShout('J\'aboie');
        $this->name=$_name;
    }

    function getName():string
    {
        return $this->name.PHP_EOL;
    }
    function setName(string $_name)
    {
        $this->name=$_name;
    }

    function eat(string $_food) :void
    {
        ($_food === 'patée')? parent::Eat($_food): parent::dontEat();
    }
    
    
}