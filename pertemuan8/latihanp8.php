<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan Pertemuan 8</title>
    <style>
        .i {
            width: 50%;
            margin: 0 auto;
            padding-top: 60px;
            margin-top: 30px;
        }
        
        table {
            margin: 0 auto;
            font-size: 22px;
        }
        
    </style>
</head>
<body>
    <div class = "i">
        <table border = "1">
            <tr>
                <th>Jumlah</th>
                <th>Harga Permen</th>
            </tr>
            <?php
            /**
             * tidak
             */
                 $harga = 500;
            for ($i = 1; $i <=25; $i+=3) {
                    echo "<tr>";
                    echo "<td>$i</td>";
                    echo "<td>$harga</td>";
                    $harga+=1500;
                    echo "</tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>
