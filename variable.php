<?php

    $name = "Jhon Doe";
    $age = 25;
    $hourlyRate = 10.50;
    $hours = 40;

    echo $name . " is " . $age . " years old. \n <br>";
    echo $name . " makes $" . $hourlyRate . " an hour. \n <br>";
    echo $name . " worked " . $hours . " much <br> ";

    $weeks = 52;

    $weeklyPay = $hourlyRate * $hours;

    $salary = $weeks * $weeklyPay;

    echo $name . "will make $" . $salary . "this year. \n" ;

?>