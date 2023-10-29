<?php
namespace Ya\Test;

require '../vendor/autoload.php';

use Lw3\Library\PizzaStore;

class TwoPizzaStore extends PizzaStore
{
    public function createPizza($type)
    {
        if ($type === 'hawaiian') {
            return new HawaiianPizza();
        }
        if ($type === 'fourcheeses') {
            return new FourCheesesPizza();
        } else {
            throw new Exception('Неверный тип пиццы.');
        }
    }
}
