<?php
//1. С помощью цикла while вывести все числа в промежутке от 0 до 100, которые делятся на 3 без остатка.
echo "<h1>Задание №1 </h1> ";
$n = 0;
while($n <= 100) {
    if ($n%3 == 0) {
        echo $n;
    } echo " " ;
    $n++;
}
