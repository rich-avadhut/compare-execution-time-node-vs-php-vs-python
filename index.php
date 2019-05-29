<?php
$time_start = microtime(true);

$sum = 0;
for ($i = 0; $i < 100000000; $i++) {
    $sum += $i;
}
echo $sum."\n";

echo "Time taken ".((microtime(true) - $time_start) * 1000)."ms";
?>