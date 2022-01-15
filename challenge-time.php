<?php
// convert the hours, minutes and seconds to seconds


$hours = readline("Please enter the hours: ");
$minutes = readline("Please enter the minutes: ");
$seconds = readline("Please ente the seconds: ");

$hours_to_second = $hours * 3600;
$minutes_to_seconds = $minutes * 60;
$time_seconds = $hours_to_second + $minutes_to_seconds + $seconds;

echo "Your time in seconds is: $time_seconds seconds \n";