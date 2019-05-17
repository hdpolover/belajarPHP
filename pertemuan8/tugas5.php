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
        function hitungZakat($gaji) {
            $zakat = (2.5 * $gaji) / 100;
            return $zakat;
        }
    ?>
    
    <div class="container">
        <h1>Tugas 5 Penghitung Zakat Penghasilan</h1>
        <h3>Zakat yang harus dikeluarkan untuk setiap gaji perbulan 
        adalah 2.5%</h3>
        <form method="POST">
            <label>Gaji</label>
            <input type="text" name="gaji" value=""><br/>
            <button type="submit" name="hitung">Hitung</button>
        </form>

        <?php 
        if(isset($_POST['hitung'])){
            $gaji = $_POST['gaji'];
            echo "<p>Gaji anda adalah Rp. " . $gaji . "<br/><p>";
            echo "<p>Zakat yang harus dikeluarkan adalah Rp." . 
            hitungZakat($gaji) . "</p>";
        }
        ?>
    </div>
</body>
</html>