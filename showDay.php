<?php
 include "Calendar.php";
$year=2021;
$month=$_POST['month'];
$date=$_POST['date'];

$calendar = new Calendar();

$result = $calendar->showDay($date,$month);

echo "<h1 id=\"result\">$result</h1>";




