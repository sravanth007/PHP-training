<?php
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("l") ."<br>";
echo "The time is " . date("H:i:sa") ."<br>";
echo "The time is " . date("H:i") ."<br>";
echo "The time is " . date("h:a") ."<br>";
echo "Created date is " . date("Y-m-d h:i:sa")  ."<br>";

$d=mktime(10, 34, 44, 16, 05, 2022);
echo "Time and  date is " . date("Y-m-d h:i:sa", $d)."<br>" ;

$d=strtotime("10:30pm April 15 2014");
echo "str to time& date is " . date("Y-m-d h:i:sa", $d);

?>
<br>
© 2010-<?php echo date("Y");?>
