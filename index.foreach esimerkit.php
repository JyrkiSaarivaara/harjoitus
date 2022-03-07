<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Document</title>
</head>
<body>
	
	<ul>
		
		<?php foreach ($names as $name) : ?>

			<li><?= $name; ?></li>
		<?php endforeach; ?>

		// toinen esimerkki
		
		<?php
			foreach ($names as $name) {
				echo "<li>$name</li>";
			}


		?>

	</ul>

</body>
</html>