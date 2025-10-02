<?php
// Arithmetic Operators
    // +, *, -, /, **, %

//Increment/Drecrement Operators
    // ++, --
// Operators Precedence
    // ()
    // **
    // * / %
    // + -

//////////////////////////////////////
// Arithmetic Operators
    // +, *, -, /, **, %
$x=10;
$y=2;
$z= null;

$z = $x + $y;
$z = $x - $y;
$z = $x * $y;
$z = $x / $y;
$z = $x ** $y;
$z = $x % $y;


//Increment/Drecrement Operators
    // ++, --
$counter = 0;

//$counter = $counter + 1;
$counter+=2;
$counter-=1;
echo $counter;

// Operators Precedence
    // ()
    // **
    // * / %
    // + -

    $total = 1 + 2 - 3 * 4 / 15625;
    echo "{$total}";


?>

