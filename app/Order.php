<?php

namespace App;

use App\ShoppingCart;

class Order{
    private $status;
    private $shoppingCart;
    private $total;

    public function __construct(ShoppingCart $shoppingCart)
    {
        $this->shoppingCart = $shoppingCart;
        $this->status = 'pending';
        $this->total = 0;
    }

    public function getShoppingCart()
    {
        return $this->shoppingCart;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus(string $status)
    {
        $this->status = $status;
    }

    public function confirmOrder()
    {
        if($this->shoppingCart->validateCart()) {
            $this->setStatus('confirmed');
            return true;
        } else {
            return false;
        }
    }


}