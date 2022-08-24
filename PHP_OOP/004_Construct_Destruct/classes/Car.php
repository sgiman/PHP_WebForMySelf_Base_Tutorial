<?php

class Car {

    public $color;
    public $wheels;
    public $speed = 180;
    public $brand;

    public function __construct($color, $wheels = 4, $speed, $brand)
    {
        $this->color = $color;
        $this->wheels = $wheels;
        $this->speed = $speed;
        $this->brand = $brand;

    }

/*
    // Старый вариант констркутора (не рекомендуется)
    public function Car($color, $wheels = 4, $speed, $brand)
    {
        $this->color = $color;
        $this->wheels = $wheels;
        $this->speed = $speed;
        $this->brand = $brand;

    }
*/
    // Разрыв метода
    public function getLorem() {
        ?>
        <div>Hello, world!</div>
        <?php
    }

    public function getCarInfo() {
        return "<h3 class='tblue'>О моём авто</h3>
        <b>Марка: </b> {$this->brand} <br>
        <b>Цвет: </b> {$this->color} <br>
        <b>Кол-во колес: </b> {$this->wheels} <br>
        <b>Скорость: </b> {$this->speed} <br>";
    }

    public function __destruct()
    {
        var_dump($this); // вывести текущий объект
        echo '<br>';
    }
}


