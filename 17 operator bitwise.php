<?php

$a = 70;
$b = 13;

// bitwise AND
$c = $a & $b;
echo "$a & $b = $c";
echo "<br>";
var_dump ("$a & $b = $c");
echo "<hr>";
// bitwise OR
$c = $a | $b;
echo "$a | $b = $c";
echo "<br>";
var_dump ("$a | $b = $c");
echo "<hr>";
// bitwise XOR
$c = $a ^ $b;
echo "$a ^ $b = $c";
echo "<br>";
var_dump ("$a ^ $b = $c");
echo "<hr>";
// Shift Left
$c = $a << $b;
echo "$a << $b = $c";
echo "<br>";
var_dump ("$a << $b = $c");
echo "<hr>";
// Shift Right
$c = $a >> $b;
echo "$a >> $b = $c";
echo "<br>";
var_dump ("$a >> $b = $c");
echo "<hr>";

print_r("<p><strong>by :M Afriansyah");