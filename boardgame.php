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
					<?php
					if (($handle = fopen("boardgame.csv", "r")) !== FALSE) {
						while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
							if($data[2] == "no")
								echo "<a class=\"button\" data-chosen=\"no\">$data[1]</a>";
						}
					}
					?>
				</div>
			</div>
			<div class="column">
				<h1 class="title">您的桌游</h1>
				<div class="buttons" id="mylist">
					<?php
					if (($handle = fopen("boardgame.csv", "r")) !== FALSE) {
						while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
							if($data[2] == "yes")
								echo "<a class=\"button\" data-chosen=\"yes\">$data[1]</a>";
						}
					}
					?>
				</div>
			</div>
		</div>
		<script type="text/javascript" src="event_register.js"></script>
	</body>
</html>