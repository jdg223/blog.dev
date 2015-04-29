<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h2>You Rolled: <?php echo $guess; ?></h2>
	<h2>The Random Dice is: <?php echo $diceNumber; ?></h2>
		<?php if($guess == $diceNumber):?>
			<h1><?php echo "You Win!"; ?></h1>
		<?php endif; ?>
</body>
</html>