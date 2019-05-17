<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Soal 3 UTS</title>
</head>
<body>
        <h1>Soal 3</h1>
        <h3>Penentu Khitan dan Social Media</h3>
        <form method="POST">
            <label>Jenis Kelamin</label><br/>
            <select name="jk">
             <option value="Laki-laki">Laki-laki</option>
             <option value="Perempuan">Perempuan</option>
            </select><br/>
            <label>Umur</label><br/>
            <input type="text" name="umur" value=""><br/><br/>
            <button type="submit" name="cek">Cek</button>
        </form>

        <?php
        if(isset($_POST['cek'])){
            $jk = $_POST['jk'];
            $umur = $_POST['umur'];
            $hasil = "";

            $detail = "<br/>Jenis Kelamin: " . $jk . 
            "<br/>Umur: " . $umur . "<br/><br/>";
            if ($jk == "Laki-laki") {
                $hasil = "Anda harus dikhitan";
            } else {
                $hasil = "Anda tidak harus dikhitan";
            }

            if ($umur > 13) {
                $hasil = $hasil . " dan Anda boleh memiliki akun sosial media.";
            } else {
                $hasil = $hasil . " dan Anda tidak boleh memiliki akun sosial media.";
            }
            echo $detail . $hasil;
        }
        ?>
</body>
</html>