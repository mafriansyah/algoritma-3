<?php

$a = 8;
$b = 2;

// menggunakan operator relasi lebih besar
$c = $a > $b;
echo "$a > $b: $c";
echo "<br>";
print_r("$a > $b: $c") ;
echo "<br>";
var_dump ("$a > $b: $c") ;
echo "<hr>";

// menggunakan operator relasi lebih kecil
$c = $a < $b;
echo "$a < $b: $c";
echo "<br>";
print_r ("$a < $b: $c");
echo "<br>";
var_dump ("$a < $b: $c");
echo "<hr>";

// menggunakan operator relasi lebih sama dengan
$c = $a == $b;
echo "$a == $b: $c";
echo "<br>";
print_r ("$a == $b: $c");
echo "<br>";
var_dump ("$a == $b: $c");
echo "<hr>";

// menggunakan operator relasi lebih tidak sama dengan
$c = $a != $b;
echo "$a != $b: $c";
echo "<hr>";

// menggunakan operator relasi lebih besar sama dengan
$c = $a >= $b;
echo "$a >= $b: $c";
echo "<hr>";

// menggunakan operator relasi lebih kecil sama dengan
$c = $a <= $b;
echo "$a <= $b: $c";
echo "<hr>";