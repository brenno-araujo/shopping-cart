<?php

require __DIR__ . '/vendor/autoload.php';

use App\ShoppingCart;
use App\Order;
use App\EmailService;
use App\Item;

echo '<h3>Shopping Cart</h3>';

$order = new Order(new ShoppingCart());

$itemOne = new Item();
$itemTwo = new Item();

$itemOne->setName('Item One');
$itemOne->setPrice(10);
$itemTwo->setName('Item Two');
$itemTwo->setPrice(20);

$cartOne = new ShoppingCart();

$order->getShoppingCart()->addItem($itemOne);
$order->getShoppingCart()->addItem($itemTwo);

print_r($order->getShoppingCart()->getItems());

$total = 0;
foreach ($order->getShoppingCart()->getItems() as $item) {
    $total += $item->getPrice();
}
echo '<br/> Total: ' . $total;

echo '<br/><br/>';

echo $order->confirmOrder() ? 'Order confirmed' : 'Order not confirmed';

echo '<br/><br/>';

echo $order->getStatus();

echo '<br/><br/>';

IF ($order->getStatus() == 'confirmed') {
    echo (EmailService::sendEmail('a','b','c','d'));
}