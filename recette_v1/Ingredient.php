<?php  

require __DIR__.'./Ustensile.php';
/**
 * 
 * Class Ingredient Used for describe Ingredient
 * 
 */
class Ingredient 
{
    /** @var string The name of the Ingredient */
    private string $ingredientName;
    /** @var float The quantity of the Ingredient */
    private float $quantity;
    /** @var string The unit of measure of the ingredient */
    private string $unitOfMeasure;
    /** @var Ustensile[] the ustensiles list can manipulate the ingredient */
    private array $ustensiles;

    /**
     * constructor of Ingredient 
     *
     * @param string $_ingredientName the ingredient name
     * @param string $_ingredientUnitOfMeasure the unit of measure of the ingredient
     */
    function __construct(string $_ingredientName, string $_ingredientUnitOfMeasure)
    {
        $this->ingredientName = $_ingredientName;
        $this->quantity = 1;
        $this->unitOfMeasure= $_ingredientUnitOfMeasure;
        $this->ustensiles=[];
    }

    /**
     * Used for get the name of an Ingredient
     * @return string the name of the ingredient
     */
    function getName():string
    {
        return $this->ingredientName;
    }

    /**
     * Used for get the quantity of an Ingredient
     * @return float the quantity
     */
    function getQuantity(): float
    {
        return $this->quantity;
    }

    /**
     * Used for set the Quantity of an Ingredient
     *
     * @param float $_newQuantity the quantity to set
     */
    function setQuantity(float $_newQuantity)
    {
        $this->quantity=$_newQuantity;
    }
    
    /**
     * Used for get the unit of measure of an Ingredient
     *
     * @return string  the unit of measure
     */
    function getUnitMeasure():string
    {
        return $this->unitOfMeasure;
    }
    
    /**
     * The copy constructor 
     * Used for duplicate an Ingredient
     *
     * @param Ingredient $_ingredient the Ingredient to copy
     */
    function copyTo(Ingredient $_ingredient)
    {
        $this->ingredientName= $_ingredient->ingredientName;
        $this->quantity= $_ingredient->quantity;
        $this->unitOfMeasure= $_ingredient->unitOfMeasure;
        $this->ustensiles = $_ingredient->ustensiles;
    }

    /**
     * Used for add an Ustensile to the ustensile list of an Ingredient 
     *
     * @param Ustensile $_ustensile the Ustensile to add
     */
    function addUstensile(Ustensile $_ustensile)
    {
        array_push($this->ustensiles,$_ustensile); 
    }

    
    function displayUstensile()
    {
        foreach($this->ustensiles as $value)
        {
            echo $value->getName().PHP_EOL;
        }
    }

    function deleteUstensile(string $_indexToDelete)
    {
        unset($this->ustensiles[$_indexToDelete]);
    }

    function deleteAll()
    {
        $this->ustensiles = [];
    }
}

?>