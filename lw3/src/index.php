<?php
require 'OnePizzaStore.php';
require 'TwoPizzaStore.php';
require 'PepperoniPizza.php';
require 'MargaritaPizza.php';
require 'FourCheesesPizza.php';
require 'HawaiianPizza.php';

$pizzaStore = new OnePizzaStore();

$pizzaStore->orderPizza('margarita');
