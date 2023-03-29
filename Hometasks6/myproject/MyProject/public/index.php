<?php
require_once __DIR__. '/../../vendor/autoload.php';

use Vendor\Myproject\Classes\MyClass;

$myClass = new MyClass();
echo $myClass::MY_CONST;

//$Bird= new \Vendor\Myproject\Classes\Bird();
//echo $Bird::;
