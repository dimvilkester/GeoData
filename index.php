<?php
require 'geol.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>GEO-Данные</title>
	<meta charset="utf-8">
	<style>
		table { 
			border-spacing: 0;
			border-collapse: collapse;
		}

		table td, table th {
			border: 1px solid #ccc;
			padding: 5px;
		}
    
		table th {
			background: #eee;
		}
	</style>
</head>

<body>
	<h2>Определение координат долготы и широты:</h2>
	<form method="POST" action="index.php">
		<label for="adress">Введите адрес:</label>
		<input type="text" id="adress" name="adress">
		<button type="submit">Найти</button>
	</form>
	
	<table>
		<tr>
			<th>Полный адрес</th>
			<th>Долгота</th>
			<th>Широта</th>
		</tr>
		<tr>
			<td><?php foreach ($collection as $item) {echo $item->getAddress(); ?></td>
			<td><?php echo $item->getLongitude(); ?></td>
			<td><?php echo $item->getLatitude();} ?></td>				
		</tr>
	</table>
</body>
</html>	