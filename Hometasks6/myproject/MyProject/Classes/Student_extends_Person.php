<?php

namespace Vendor\Myproject\Classes;

class Student extends Person {
    private $grade;

    public function __construct($name, $age, $grade) {
        parent::__construct($name, $age);
        $this->grade = $grade;
    }

    public function getGrade() {
        return $this->grade;
    }
}