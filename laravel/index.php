<?php
require 'MyPizzaStore.php';
require 'PepperoniPizza.php';

$pizzaStore = new MyPizzaStore();

$pizzaStore->orderPizza('pepperoni');