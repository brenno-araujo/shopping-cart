<?php 

namespace App;

use App\Item;

class ShoppingCart
{
    private $items;

    public function __construct()
    {
        $this->items = [];
    }

    public function getItems()
    {
        return $this->items;
    }

    public function addItem(Item $item)
    {
        array_push($this->items, $item);
        return true;
    }

    public function validateCart(): bool
    {
        return count($this->items) > 0;
    }
}