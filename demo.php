<!DOCTYPE html>
<html>
<head>
  <?php 
error_reporting(1); 
require_once('logic.php');
?>
<link href="style.css" type="text/css" rel="stylesheet">
 
</head>


<body >

	<form action='demo.php' method='POST'>
    	Enter 5 contestants<br>
    	<input type='text' name='contestant1'><br>
    	<input type='text' name='contestant2'><br>
    	<input type='text' name='contestant3'><br>
    	<input type='text' name='contestant4'><br>
    	<input type='text' name='contestant5'><br>
    	<input type='submit' value='Pick a winner!'><br>
	</form>
	
	<table>
		<?php foreach($contestants as $name => $winner_or_loser): ?>
			<tr>
				<td><?=$name?></td>
				<td><?=$winner_or_loser?></td>
			</tr>	
		<?php endforeach; ?>
	</table>	

</body>
</html>
