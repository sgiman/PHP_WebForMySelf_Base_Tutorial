<?php
// модификаторы доступа (область видимости)
// - private
// - protected
// - public

class Car {
    public $color;          // php5
    public $wheels = 4;     // php5
    public $speed = 180;    // php5
    var $brand;             // php4

    // since PHP 5.6
    public $path = __DIR__ . '\test';
    public $test = 1 + 2;
}


