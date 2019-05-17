<?php
    $t = $_POST['t'];

if ($t > 110) {
    $minIdeal = $t - 110;
    $maxIdeal = ($t - 110) + 14;
} elseif ($t > 60) {
    $minIdeal = $t - 60;
    $maxIdeal = ($t - 60) + 14;
} elseif ($t > 10) {
    $minIdeal = $t - 10;
    $maxIdeal = ($t - 10) + 7;
} elseif ($t > 0) {
    $minIdeal = $t - 1;
    $maxIdeal = ($t - 1) + 4;
} else {
    echo "Berat badan ideal tidak dapat dihitung.";
}
echo "Berat badan ideal anda adalah " . $minIdeal . " - " . $maxIdeal . " kg.";
?>
