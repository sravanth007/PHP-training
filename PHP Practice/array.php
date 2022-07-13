<?php
$cars = array("Tata", "BMW", "AUDI", "MG");
echo count($cars). "<br>";
print_r($cars). "<br>";

$arrlength = count($cars);

for($x = 0; $x < $arrlength; $x++) {
  echo $cars[$x];
  echo "<br>";
}
?>
