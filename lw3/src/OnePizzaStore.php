<?php
require '../vendor/autoload.php';

use Lw3\Library\PizzaStore;

class OnePizzaStore extends PizzaStore
{
    public function createPizza($type)
    {
        if ($type === 'pepperoni') {
            return new PepperoniPizza();
        }
        if ($type === 'margarita') {
            return new MargaritaPizza();
        } else {
            throw new Exception('Неверный тип пиццы.');
        }
    }
}
