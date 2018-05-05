<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Hello Bulma!</title>
		<link rel="stylesheet" href="bulma.css">
		<script type="text/javascript" src="choose_item.js"></script>
	</head>
	<body>
		<div class="columns">
			<div class="column">
				<h1 class="title">全部桌游</h1>
				<div class="buttons" id="bglist">
					<a class="button" data-bgid="0001" data-chosen="no">三国杀</a>
					<a class="button" data-bgid="0001" data-chosen="no">狼人杀</a>
					<a class="button" data-bgid="0001" data-chosen="no">大富翁</a>
					<a class="button" data-bgid="0001" data-chosen="no">达芬奇密码</a>
					<a class="button" data-bgid="0001" data-chosen="no">富饶之城</a>
				</div>
			</div>
			<div class="column">
				<h1 class="title">您的桌游</h1>
				<div class="buttons" id="mylist">
				
				</div>
			</div>
		</div>
		<script type="text/javascript" src="event_register.js"></script>
		<?php
		$row = 1;
		if (($handle = fopen("boardgame.csv", "r")) !== FALSE) {
			while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
				$num = count($data);
				echo "<p> $num fields in line $row: <br /></p>\n";
				$row++;
				for ($c=0; $c < $num; $c++) {
					echo $data[$c] . "<br />\n";
				}
			}
			fclose($handle);
		}
		?>
	</body>
</html>