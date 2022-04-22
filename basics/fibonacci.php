<?php
$a=0;
$b=1 ; 
$output=0;
$n= readline("Enter a number: ");
echo $a."\n".$b."\n";
for ($x =0; $x <= $n; $x++) {
    $output=$a+$b;
    $a=$b;
    $b=$output;
  echo $output."\n";
  }
?>