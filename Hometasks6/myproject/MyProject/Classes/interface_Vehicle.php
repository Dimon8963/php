<?php

namespace Vendor\Myproject\Classes;

interface Vehicle {
    public function start();
    public function stop();
}

class Car implements Vehicle {
    public function start() {
        echo "Starting the car...\n";
    }

    public function stop() {
        echo "Stopping the car...\n";
    }
}