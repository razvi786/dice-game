<?php

	$player1 = "Player 1";
	$player2 = "Player 2";


/*
function get_names(&player1,&player2){

	if(isset($_POST['names'])){

		*player1 = trim($_POST['player1']);
		*player2 = trim($_POST['player2']);

	}
}
	get_names(&player1,&player2);
	

	*/
	$rand=rand(1,6);
	if(isset($_POST['roll1'])){
		global $player1;
		echo '<i>'.$player1.'</i> rolled a <strong>'.$rand.'</strong>';
	}
	else if(isset($_POST['roll2'])){
		global $player2;
		echo '<i>'.$player2.'</i> rolled a <strong>'.$rand.'</strong>';
	}
		


	
	

?>

<form action="dice.php" method='POST'>
	<input type="submit" name="roll1" value="Player 1">
	<input type="submit" name="roll2" value="Player 2">
</form>
