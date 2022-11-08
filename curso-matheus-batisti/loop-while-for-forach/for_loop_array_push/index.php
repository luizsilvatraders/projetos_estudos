<?php

$arr = [];

for ($i=10; $i <= 20 ; $i++) {
   array_push($arr, $i);
}

for ($i=0; $i < count($arr) ; $i++) {

   if ($arr[$i] % 2 != 0) {
      echo "Numero impar: $arr[$i]" . PHP_EOL;
   }
}
