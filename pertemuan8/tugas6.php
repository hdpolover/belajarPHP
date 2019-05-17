<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tugas 5 Penghitung Zakat</title>

    <style type="text/css">
        .container {
            width: 70%;
            margin: 0 auto;
            background-color: #33cccc;
            padding: 5px 5px 5px 5px;
            margin-top: 30px;
        }

        .container h1 {
            text-align: center;
        }

        .container h3 {
            text-align: center;
        }

        .container form input {
			height: 30px;
			width: auto;
			margin-bottom: 10px;
			padding-left: 10px;
			border: 1px solid lightblue;
		}
		
        .container form select {
			height: 30px;
			width: auto;
			margin-bottom: 10px;
			padding-left: 10px;
			border: 1px solid lightblue;
		}

		.container form button {
			width: auto;
			background-color: blue;
			border: 0;
			color: white;
			padding: 15px;
			font-size: 10px;
			text-transform: uppercase;
			letter-spacing: 3px;
		}
		
		.container form button:hover {
			background-color: lightblue;
		}
		
		.container form {
            text-align: center;
			margin: 30px 20px;
		}

        .container p {
            text-align: center;
            font-size: 20px;
        }

        .container form label {
            font-size: 30px;
            padding-right: 10px;
        }
    </style>
</head>
<body>
    <?php
        function hitungBerat($berat) {
            $hasil = "";
            if ($berat > 80) {
                $hasil = "Anda, kelebihan berat badan.";
            } else {
                $hasil = "Anda, gizi buruk.";
            }
            return $hasil;
        }
    ?>
    
    <div class="container">
        <h1>Tugas 6</h1>
        <h3>Penghitung Berat Badan</h3>
        <form method="POST">
            <label>Berat Badan</label>
            <input type="text" name="berat" value=""><br/>
            <button type="submit" name="hitung">Hitung</button>
        </form>

        <?php 
        if(isset($_POST['hitung'])){
            $berat = $_POST['berat'];
            echo "<p>" . hitungBerat($berat) . "</p>";
        }
        ?>

        <h3>Penghitung Gaji</h3>
        <form method="POST">
            <label>Apakah status Anda? </label>
            <select name="status">
             <option value="menikah">Menikah</option>
             <option value="belum menikah">Belum Menikah</option>
            </select><br/>
            <label>Sudah berapa lama Anda menikah?</label>
            <input type="text" name="lama" value=""><br/>
            <label>Berapa banyak anak yang Anda punya?</label>
            <input type="text" name="anak" value=""><br/>
            <button type="submit" name="cek">Cek</button>
        </form>

        <?php 
        if(isset($_POST['cek'])){
            $gaji_pokok = 1600000;
            $tunjangan_anak = 0;
            $tunjangan_perumahan = 0;
            $gaji = 0;

            $status = $_POST['status'];
            $lama = $_POST['lama'];
            $anak = $_POST['anak'];

            if($status == "menikah") {
                $tunjangan_anak = (10 * $gaji_pokok) / 100;
                if ($anak > 3) {
                    $tunjangan_anak = $tunjangan_anak + (5 * $gaji_pokok) / 100;
                }
                if ($lama > 4) {
                    $tunjangan_perumahan = (15 * $gaji_pokok) / 100;
                }
                $gaji = $gaji_pokok + $tunjangan_anak + $tunjangan_perumahan;
                echo "<p>Gaji anda adalah Rp. " . $gaji . "</p>";
            } else {
                $gaji = $gaji_pokok;
                echo "<p>Gaji anda adalah Rp. " . $gaji . "</p>";
            }
        }
        ?>
    </div>
</body>
</html>