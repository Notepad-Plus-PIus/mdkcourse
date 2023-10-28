<?php
namespace Lw3\Library;

abstract class Pizza
{
    public string $name;
    public string $sauce;
    public array $toppings;

    public function prepare(){
       echo 'Началась готовка пиццы: '. $this->name;
       echo 'Добавлен соус: '. $this->sauce;
       echo 'Добавлены топинги: '. implode($this->toppings);

    }
    public function cut(){
        echo 'Данную пиццу нарезают по диагонали';
    }
}
