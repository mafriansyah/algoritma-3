<?php
$text = " Hello Erwin! ";
echo "[" . trim($text) . "]"; // Outputs: "[Hello World!]"
echo "[" . ltrim($text) . "]"; // Outputs: "[Hello World! ]"
echo "[" . rtrim($text) . "]"; // Outputs: "[ Hello World!]"
