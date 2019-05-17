<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Soal 4 UTS</title>
</head>
<body>
        <h1>Soal 4</h1>
        <h3>Penghitung Gaji Buruh</h3>
        <form method="POST">
            <label>Apakah Anda pernah terlambat? </label><br/>
            <select name="terlambat">
             <option value="pernah">Pernah</option>
             <option value="tidak">Tidak pernah</option>
            </select><br/>
            <label>Sudah berapa kali Anda terlambat? (Isi 0 jika tidak pernah terlambat)</label><br/>
            <input type="text" name="lambatKali" value=""><br/><br/>
            <button type="submit" name="cek">Cek</button>
        </form>

        <?php 
        if(isset($_POST['cek'])){
            $gajiPokok = 900000;
            $bonus = 0;
            $potongan = 0;
            $gaji = 0;

            $lambat = $_POST['terlambat'];
            $totalLambat = $_POST['lambatKali'];

            if($lambat == "pernah") {
                if ($totalLambat > 7) {
                    $potongan = ($gajiPokok * 3) / 100;
                    $gaji = $gajiPokok - $potongan;
                } else {
                    $gaji = $gajiPokok;
                }
            } else {
                $bonus = ($gajiPokok * 6) / 100;
                $gaji = $gajiPokok + $bonus;
            }
            echo "<p>Gaji anda adalah Rp. " . $gaji . "</p>";
        }
        ?>
</body>
</html>