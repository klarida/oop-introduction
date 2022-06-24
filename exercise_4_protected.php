<?php

declare(strict_types=1);

/* EXERCISE 4

Copy the code of exercise 2 to here and delete everything related to cola.

TODO: Make all properties protected.
TODO: Make all the other prints work without error without changing the beverage class.

USE TYPEHINTING EVERYWHERE!
*/
class Beverage
{
// get properties, only public in this case
    protected string $color;
    protected float $price;
    protected string $temperature;

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
protected string  $name;
protected float   $alocoholPercentage;


public  function __construct(string $color, float $price , string $name, float $alocoholPercentage)
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

echo  $duvel ->getAlocoholPercentage();
echo  $duvel->getinfo();