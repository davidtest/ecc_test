<?php
$sum = 0;

// calculate the sum from 1 to 100
for ($i = 1; $i <= 100; $i++) {
	$sum += $i;
}

echo $sum . PHP_EOL;

// add another method to this thing
$sum = (1 + 100) * 100 / 2;

echo $sum . PHP_EOL;

// wooo