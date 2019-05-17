<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TUGAS 4</title>

    <style type="text/css">
		.container {
			width: 50%;
			margin: 0 auto;
			padding-top: 60px;
			margin-top: 30px;
		}
		
		table {
			width: 100%;
			font-size: 16px;
			text-align: center;
			margin-bottom: 50px;
			border: 1px solid #e5e8ed;
			border-radius: 0.5em;
			box-shadow: 5px;
			border-collapse: collapse;
		}
		
		table th {
			background-color: #f3f6f9;
			padding: 20px;
			color: #666;
			border-bottom: 1px solid #ddd;
		}
		
		table tr {
			border: 1px solid #e5e8ed;
			border-radius: 6px;
		}
		
		table td {
			padding: 20px;
			color: #666;
			border-bottom: 1px solid #ddd;
		}
		
		table tr:hover {
			background-color: #e5e8ed;
		}
		</style>
</head>
<body>
        <?php
            $label = array("No", "Nama", "Harga");
        ?>
		<div class="container">
			<table>
				<tr>
					<th><?php echo $label[0] ?></th>
					<th><?php echo $label[1] ?></th>
					<th><?php echo $label[2] ?></th>
				</tr>
                <?php
                    $nama = array("Apel", "Salak", "Nanas", "Jambu");
                    $harga = 2500;
                    $no = 1;

                    foreach ($nama as $data) {
                ?>
				<tr>
					<td><?php echo $no++;?></td>
					<td><?php echo $data;?></td>
					<td><?php echo $harga * ($no - 1);?></td>
				</tr>
                <?php
                    }
                ?>
			</table>
		</div>
	</body>
</html>