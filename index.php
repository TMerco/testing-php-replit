<?php

echo '<h1>Claculator</h1>';
  
include 'Calculator.php';

$myCalc = new Calculator();

echo $myCalc->add(3,7);
