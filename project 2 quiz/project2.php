<!DOCTYPE html>
<html lang="en">
<head>
  <title>Quiz php</title>
  
  <style>
div{
	width: 400px;
margin: 100px auto;
}
</style>

</head>



<body>
<form action="project2.php" 
method="post"> 
<div>
<?php
	$questions = array ('0', '1','2', '3', '4', '5', '6', '7', '8', '9');
	$cAnswers  = array ('0a', '1a', '2a', '3a', '4a', '5a', '6a', '7a', '8a', '9a');
	$fAnswers1 = array ('0b', '1b', '2b', '3b', '4b', '5b', '6b', '7b', '8b', '9b');
	$fAnswers2 = array ('0c', '1c', '2c', '3c', '4c', '5c', '6c', '7c', '8c', '9c');
	$fAnswers3 = array ('0d', '1d', '2d', '3d', '4d', '5d', '6d', '7d', '8d', '9d');
	
	
	$numbers = array ('0', '1','2', '3', '4',  '5', '6', '7', '8', '9');
    shuffle($numbers);

	$choice1 = array 
	(
	array (0,"A1"),
	array (1,"B1"),
	array (2,"C1"),
	array (3,"D1"),
	);
	
	
	
	$choice2 = array 
	(
	array (0,"A2"),
	array (1,"B2"),
	array (2,"C2"),
	array (3,"D2"),
	);
	
	$choice3 = array 
	(
	array (0,"A3"),
	array (1,"B3"),
	array (2,"C3"),
	array (3,"D3"),)
	;

		
    shuffle($choice1);
    shuffle($choice2);
    shuffle($choice3);

		$Allchoice = array (
		$choice1,$choice2,$choice3
		);
	
	for ($x=0;$x<3;$x++)
	{
		{
			echo '<div>';
				echo '<p>'.$questions[$numbers[$x]].'</p>';
				echo '<p>'.$Allchoice[$x][0][1].' '.$Allchoice[$x][1][1].' '.$Allchoice[$x][2][1].' '.$Allchoice[$x][3][1].'</p>';
			echo '</div>';
		}
	}

?>

<p class="center">
	<input type="submit" value="Submit"> 
	<input type="reset">
</p>
</div>
</form>
</body>
</html>
