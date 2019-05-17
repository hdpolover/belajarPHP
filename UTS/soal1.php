<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Soal 1 UTS</title>
</head>
<body>
        <h1>Soal 1</h1>
        <h3>Penghitung Berat Badan</h3>
        <form method="POST">
            <label>Berat Badan</label><br/>
            <input type="text" name="berat" value=""><br/><br/>
            <button type="submit" name="hitung">Hitung</button>
        </form>

        <?php
        function hitungBerat($berat) {
            $status = "Berat Anda adalah " . $berat . "<br/>";
            $hasil = "";
            if ($berat > 100) {
                $hasil = "Anda, kelebihan berat badan.";
            } else if ($berat < 30) {
                $hasil = "Anda, mengalami gizi buruk.";
            }
            return $status . $hasil;
        }

        if(isset($_POST['hitung'])){
            $berat = $_POST['berat'];
            echo "<p>" . hitungBerat($berat) . "</p>";
        }
        ?>
</body>
</html>