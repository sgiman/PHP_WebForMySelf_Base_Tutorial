<?php

class Car {

    public $color;
    public $wheels;
    public $speed = 180;
    public $brand;

    public static $CountCar = 0;    // Статическая переменная

    public function __construct($color, $wheels = 4, $speed, $brand)
    {
        $this->color = $color;
        $this->wheels = $wheels;
        $this->speed = $speed;
        $this->brand = $brand;

    }

    public static function getCoutCar() {
        
    }

    public function getCarInfo() {
        return "<h3 class='tblue'>О моём авто</h3>
        <b>Марка: </b> {$this->brand} <br>
        <b>Цвет: </b> {$this->color} <br>
        <b>Кол-во колес: </b> {$this->wheels} <br>
        <b>Скорость: </b> {$this->speed} <br>";
    }

}


