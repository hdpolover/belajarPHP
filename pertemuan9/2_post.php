<?php
    $t = $_POST['tinggi'];
    $jk = $_POST['jk'];

if ($t >= 170) {
    echo "Anda berpotensi masuk club basket";
    if ($jk == "l") {
        echo " dan anda akan masuk tim pria.";
    } else {
        echo " dan anda akan masuk tim perempuan.";
    }
} else {
    echo "Anda tidak berpotensi masuk club basket.";
}
?>
