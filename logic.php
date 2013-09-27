<?php
error_reporting(1); 





$winning_number = rand(0,4);
$winner=false;
$two_winners=false;

foreach($_POST as $field_name => $contestant_name) {
	
		$contestants_random_number = rand(0,4);	
		
		
		// Winner!
		if($winning_number == $contestants_random_number) {
			$contestants[$contestant_name] = "Winner";
			if ($winner) {
				$two_winners=true;
			}
			$winner=true;
		}
		// Loser!
		else {
			$contestants[$contestant_name] = "Loser";		
		}	
		
}	
if (!$winner) {
	echo 'No winners this round :( <br/> <br/>';
	}
if ($two_winners) {
	echo 'It\'s a tie! :( <br/> <br/>';
	}
?>

