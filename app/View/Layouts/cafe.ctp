<!doctype html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	
	<title>Peraichi cafe</title>
	<?php
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<?php echo $this->fetch('content'); ?>
</body>
</html>