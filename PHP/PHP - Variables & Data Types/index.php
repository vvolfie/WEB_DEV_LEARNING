<?php
    //strings
    $name = "Big Bro";
    $email = "fake@gmail.com";
    $food = "pizza";
    //ints
    $age = 33;
    $users = 2;
    $quantity = 3;
    //floats
    $tax_rate = 5.1;
    $price = 4.55;
    $gpa = 3.5;
    //booleans
    $employed = true;
    $online = false;
    $for_sale = true;


    /* echo examples using variables
    echo "Hello {$name} you are {$age} years old <br>";
    echo "Your email is {$email} <br>";
    echo "There are {$users} users online <br>";
    echo "You would like to buy {$quantity} items <br>";
    echo"your gpa is {$gpa}<br>";
    echo " your pizza is \${$price} <br>";
    echo "The sales tax rate is {$tax_rate}% <br>";
    echo "Online Status: {$online} <br>";
    */

    $total = null;

    echo "You have ordered {$quantity} x {$food}s <br>";
    $total = $quantity*$price;
    echo "Your total is: \${$total}";

?>

