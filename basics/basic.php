<?php
echo 'While loop is :';
$x=1;
while ($x<=10) {
    echo "The number is: $x \n";
    $x++;
}
$x = 1;
echo "do While loop is : ";
do {
  echo "The number is: $x \n";
  $x++;
} while ($x <= 10);

echo "For loop: ";
for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x \n";
  }
?>