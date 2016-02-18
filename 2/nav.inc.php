<?php

$current = explode('/',$_SERVER['SCRIPT_NAME']);
$current = $current[count($current)-1];
//echo $current;
?>

	<h1>Logo</h1>
	<ul>
		<li><a href="home.php" <?php echo ($current == 'home.php')? 'class="active"' : '';?>>Home</a></li>
		<li><a href="contact.php" <?php echo ($current == 'contact.php')? 'class="active"' : '';?>>Contact</a></li>
	</ul>
</nav>