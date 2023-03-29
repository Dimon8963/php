<?php

namespace Vendor\Myproject\Classes;

// Клас, який використовує декілька трейтів
trait CanSwim {
    public function swim() {
        echo "Swimming...\n";
    }
}

trait CanRun {
    public function run() {
        echo "Running...\n";
    }
}

class Animal2 {
    use CanSwim, CanRun;
}