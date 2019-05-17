<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Soal 2 UTS</title>
</head>
<body>
        <h1>Soal 2</h1>
        <h3>Penghitung Luas Persegi Panjang</h3>
        <form method="POST">
            <label>Panjang</label><br/>
            <input type="text" name="panjang" value=""><br/>
            <label>Lebar</label><br/>
            <input type="text" name="lebar" value=""><br/><br/>
            <button type="submit" name="hitungLuas">Hitung</button>
        </form>

        <?php
        function hitungLuas($p, $l) {
            $luas = $p * $l;
            $hasil = "Luas persegi panjang dengan panjang " . $p . 
            " dan lebar " . $l . " adalah ";

            return $hasil . $luas;
        }

        if(isset($_POST['hitungLuas'])){
            $panjang = $_POST['panjang'];
            $lebar = $_POST['lebar'];
            echo "<p>" . hitungLuas($panjang, $lebar) . "</p>";
        }
        ?>
</body>
</html>