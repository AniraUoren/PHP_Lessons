<?php

echo "<h1>Используя только две переменные, поменяйте их значение местами.</h1> <h3> Например, если a = 1, b = 2, надо, чтобы получилось b = 1, a = 2.</h3>";
$a = 2;
$b = 1;

echo "<br><br>Переменные: a = $a; b = $b";

$a = $a ^ $b;
$b = $b ^ $a;
$a = $a ^ $b;
echo "<br><br>Переменные после замены: a = $a; b = $b";