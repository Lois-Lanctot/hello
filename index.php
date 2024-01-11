<?php

//this is my CONTROLLER!

ini_set("display_errors", 1);
error_reporting(E_ALL);

//require the autoload file
require_once('vendor/autoload.php');

//Instantiate the F3 (Fat-Free Framework) Base class
$f3 = Base::instance();
//Base f3 = new Base(); --this is what it would look like in Java

//Define a default route
$f3->route('GET /', function() {
    echo "<h1>Hello!</p>";
});

//Run fat-free
$f3->run();
//-> --is . in Java
