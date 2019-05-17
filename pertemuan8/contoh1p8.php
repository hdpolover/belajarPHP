<?php
/**
 * ddsfd
 **/
for ($ulang = 1;$ulang <= 10; $ulang++) {
    echo "Pemrograman web <br>";
}


    $ulang = 1;
while ($ulang <= 10) {
    echo "Perulangan ke $ulang <br>";
    $ulang++;
}

for ($ulang = 1;$ulang <= 100; $ulang++) {
    if ($ulang == 10) {
        break;
    }
    echo "Perulangan ke $ulang <br>";
}

    //while dan break
    $ulang = 0;
while ($ulang <= 100) {
    $ulang++;

    if ($ulang == 10) {
        break;
    }

    echo "Perulangan ke $ulang <br>";
}

for ($ulang = 1;$ulang <= 10; $ulang++) {
    if ($ulang == 5) {
        continue;
    }
    echo "Perulangan ke $ulang <br>";
}

    //foreach
    $nama = array("Andry", "Joko", "Sukma", "Rina", "Sari");
foreach ($nama as $value) {
        echo "$value";
        echo "<br>";
}

    //foreach key
    $nama = array(
        1 => "Andry",
        2 => "Joko",
        3 => "Sukma",
        4 => "Rina",
        5 => "Sari"
    );

    foreach ($nama as $kunci => $isi) {
        echo "Urutan ke-$kunci adalah $isi";
        echo "<br>";
    }
    ?>
