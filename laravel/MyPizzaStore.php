<?php
require 'vendor/autoload.php';
use Lw3\Library\PizzaStore;

class MyPizzaStore extends PizzaStore
{
    public function createPizza($type)
    {
        if ($type === 'pepperoni') {
            return new PepperoniPizza();
        } else {
            throw new Exception('Неверный тип пиццы.');
        }
    }
}