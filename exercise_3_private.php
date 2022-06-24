<?php

declare(strict_types=1);

/* EXERCISE 3

TODO: Copy the code of exercise 2 to here and delete everything related to cola.
TODO: Make all properties private.
TODO: Make all the other prints work without error.
TODO: After fixing the errors. Change the color of Duvel to light instead of blond and also print this new color on the screen after all the other things that were already printed (to be sure that the color has changed).
TODO: Create a new private method in the Beer class called beerInfo which returns "Hi i'm Duvel and have an alcochol percentage of 8.5 and I have a light color."

Make sure that you use the variables and not just this text line.

TODO: Print this method on the screen on a new line.

USE TYPEHINTING EVERYWHERE!
*/
class Beverage
{
// get properties, only public in this case
    private string $color;
    private float $price;
    private string $temperature;
    public function __construct(string $color, float $price)
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = 'cold';

    }

    public function getinfo()
    {
        echo "This beverage is $this->color and $this->temperature ";
    }

}

class beer extends Beverage{
// get properties, only public in this case
    private string  $name;
    private float   $alocoholPercentage;
    private  function __construct(string $color, float $price , string $name, float $alocoholPercentage)
    {
        parent::__construct($color, $price);
        $this->name =$name;
        $this->alocoholPercentage =$alocoholPercentage;
    }

    /**
     * @return float
     */
    public function getAlocoholPercentage(): float
    {
        return $this->alocoholPercentage;
    }

}
$duvel = new beer('blond', 3.5, 'duvel',8.5);
echo  $duvel ->alocoholPercentage;
echo  $duvel ->getAlocoholPercentage();
echo  $duvel ->color;
echo  $duvel->getinfo();