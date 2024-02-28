<?php

$a = 10;
$b = 15;
$c = 20;

$max = $a;

if ($b > $max) {
  $max = $b;
}

if ($c > $max) {
  $max = $c;
}

echo "Giá trị lớn nhất là: $max";

?>
