<?php
namespace Traits;
trait PriceTrait
{
    function getPrice()
    {
        return $this->price;
    }

    function setPrice($price)
    {
        $this->price = $price;
    }
}
