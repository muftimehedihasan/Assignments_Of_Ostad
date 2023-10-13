<?php
$celsiusTemp = 28;
$classification = "";

if ($celsiusTemp >= 30) {
    $classification = "hot";
} elseif ($celsiusTemp >= 20 && $celsiusTemp < 30) {
    $classification = "warm";
} elseif ($celsiusTemp >= 10 && $celsiusTemp < 20) {
    $classification = "cool";
} else {
    $classification = "cold";
}

echo "Temperature: ".$celsiusTemp."°C"."<br>";
echo "Classification: ".$classification."<br>";
