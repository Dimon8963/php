<?php

namespace Vendor\Myproject\Classes;

abstract class Animal {
    protected $name;
    protected $color;

    public function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }

    abstract public function makeSound();
}