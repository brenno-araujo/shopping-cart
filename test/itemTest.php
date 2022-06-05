<?php

use App\Item;
use PHPUnit\Framework\TestCase;

class ItemTest extends TestCase
{
    public function testInititalState()
    {
        $item = new Item();
        $this->assertEquals('', $item->getName());
        $this->assertEquals(0, $item->getPrice());
    }

    /**
     * @dataProvider dataValuesNameProvider
     */
    public function testGetAndSetName($name)
    {
        $item = new Item();
        $item->setName($name);
        $this->assertEquals($name, $item->getName());
    }

    /**
    * @dataProvider dataValuesPriceProvider
    */
    public function testGetAndSetPrice($price)
    {
        $item = new Item();
        $item->setPrice($price);
        $this->assertEquals($price, $item->getPrice());
    }

    public function testValidateItem()
    {
        $item = new Item();
        $item->setName('Orange');
        $item->setPrice(150);

        // Test that the item is valid
        $this->assertTrue($item->validateItem());

        // Test that the item is invalid
        $item->setName('');
        $this->assertFalse($item->validateItem());

        // Test that the item is invalid
        $item->setName('Orange');
        $item->setPrice(0);
        $this->assertFalse($item->validateItem());
    }

    public function dataValuesPriceProvider()
    {
        return [
            [-50],
            [0],
            [150],
            [100],
            [200],
            [300],
            [400],
            [500],
            [600],
            [700],
            [800],
            [900],
        ];
    }

    public function dataValuesNameProvider()
    {
        return [
            ['Orange'],
            ['Apple'],
            ['Banana'],
            ['Cherry'],
            ['Grape'],
            ['Lemon'],
            ['Lime'],
            ['Mango'],
            ['Pear'],
            ['Peach'],
            ['Pineapple'],
            ['Strawberry'],
            ['Watermelon'],
            ['Coconut'],
            ['Cranberry'],
            ['Cucumber'],
            ['Eggplant'],
            ['Garlic'],
            ['Kiwi'],
            ['Lettuce'],
            ['Mushroom'],
            ['Onion'],
            ['Pepper'],
            ['Potato'],
            ['Tomato'],
            ['Cabbage'],
            ['Carrot'],
            ['Cauliflower'],
            ['Celery'],
            ['Corn'],
            ['Cucumber'],
            ['Eggplant'],
            ['Garlic'],
            ['Kiwi'],
            ['Lettuce'],
            ['Mushroom'],
            ['Onion'],
            ['Pepper'],
            ['Potato'],
            ['Tomato'],
            ['Cabbage'],
            ['Carrot'],
            ['Cauliflower'],
            ['Celery'],
            ['Corn'],
            ['Cucumber'],
            ['Eggplant'],
            ['Garlic'],
            ['Kiwi'],
            ['Lettuce'],
            ['Mushroom'],
            ['Onion'],
            ['Pepper'],
            ['Potato'],
            ['Tomato'],
            ['Cabbage'],
            ['Carrot'],
            ['Cauliflower'],
            ['Celery'],
            ['Corn'],
            ['Cucumber'],
            ['Eggplant'],
            ['Garlic'],
            ['Kiwi'],
            ['Lettuce'],
            ['Mushroom'],
            ['Onion'],
            ['Pepper'],
        ];
    }
}