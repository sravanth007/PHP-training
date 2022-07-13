<?php

$name= "Hemanth is a good boy!";
echo $name;
echo "<br>";

echo "The lenght of my string is" . strlen($name);
echo "<br>";
echo str_word_count($name);
echo "<br>";
echo strrev($name);
echo "<br>";
echo strpos($name, "is");
echo "<br>";
echo str_replace("Hemanth", "Karthik", $name);
echo "<br>";
echo str_repeat($name,20);
echo "<br>";
?>