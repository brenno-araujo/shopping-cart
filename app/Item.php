<?php

namespace App;

class Item 
{
    private $name;
    private $price;

    public function __construct()
    {
        $this->name = '';
        $this->price = 0;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setPrice(float $price)
    {
        $this->price = $price;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function validateItem(): bool
    {
        return $this->name != '' && $this->price > 0;
    }
}