<?php
//ejercicio 7 segunda sección//
function primenumber($MyNum) {
  $n = 0;

  for($i = 2; $i < ($MyNum/2+1); $i++) {
    if($MyNum % $i == 0){
      $n++;
      break;
    }
  }

  if ($n == 0){
    echo $MyNum." ";
  } 
}

$x = 10;
$y = 50;
echo "números primos entre ".$x." y ".$y." son: \n";
for($i = $x; $i < $y + 1; $i++) {
  primenumber($i);
}
?>
