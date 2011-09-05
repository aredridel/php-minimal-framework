<html>
	<head>
		<?php if(@$title): ?>
			<title><?php echo $title ?></title>
		<?php endif; ?>
		<link rel='stylesheet' href='site.css'>
	</head>
	<body>
		<?php if(@$title): ?>
			<h1><?php echo $title ?></h1>
		<?php endif; ?>
		<?php echo $content; ?>
	</body>
</html>
