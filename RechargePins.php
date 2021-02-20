<?php

echo "<h3>Recharge Card Pins for Sidehustle Telecommunications</h3>";
echo "<hr>";

for ($i=1; $i < 201; $i++) { 
    $x = 16;
    $min = 10**$x;
    $max = (10**($x+1)-1);
    $result = rand($min, $max);

    echo "pin ".$i." - ". $result;
    echo "<br>";
}