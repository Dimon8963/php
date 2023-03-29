<?php

namespace Vendor\Myproject\Classes;

// Трейт та клас, який його використовує
trait CanFly {
    public function fly() {
        echo "Flying...\n";
    }
}

class Bird {
    use CanFly;
}