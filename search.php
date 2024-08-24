<?php
// After connecting to database
$from = $_GET['from'];
$to = $_GET['to'];
$date = $_GET['date'];

// without a databse

echo"<h2>Available Flight from $from to $to on $date<h2>";
echo"<p>Flight 1: $from to $to at 08:00 AM</p>";
echo"<p>Flight 2: $from to $to at 02:00 PM</p>";
echo"<p>Flight 3: $from to $to at 06:00 PM</p>";
?>
