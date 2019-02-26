<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
	<?php foreach ($style as $styles) {
		echo HTML::style($styles);
	}
	foreach ($script as $scripts) {
		echo HTML::script($scripts);
	}  ?>
	<title><?php echo $title; ?></title>
</head>
<body>
	<?php echo $header; ?>
		<main>
			<?php echo $content; ?>
		</main>
	<footer>

	</footer>
</body>
</html>