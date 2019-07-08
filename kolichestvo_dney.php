<?php

$now = time(); // or your date as well
$your_date = strtotime("2010-01-31");
$datediff = $now - $your_date;
echo round($datediff / (60 * 60 * 24));

// Определение количества дней до сегодня


$date_1 = date_create('1988-01-01');
$date_2 = date_create('2018-01-01');
$interval = date_diff($date_1, $date_2);
echo $interval->format('%R%a days');

// Определение количества дней между двумя датами