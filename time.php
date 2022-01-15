<?php

$seconds = readline("Please! type the seconds: ");

// echo $seconds ." seconds";

$horas = $seconds / 3600;
$seconds = $seconds & 3600;

echo $horas . " hora(s)" ." " . $seconds . " segundos";

echo "\n";