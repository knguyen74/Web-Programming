<!DOCTYPE html>
<html lang="en">
<head>
  <title>Quiz php</title>
  <link rel="stylesheet" type="text/css" href="project2.css">
</head>



<body>
<form action="project2-1.php" 
method="post"> 
<div class="one">
<?php
	session_start();


	$questions = array (
	array ('0',"q0"), 	//original position
	array ('1',"q1"),
	array ('2',"q2"),
	array ('3',"q3"),
	array ('4',"q4"),
	array ('5',"q5"),
	array ('6',"q6"),
	array ('7',"q7"),
	array ('8',"q8"),
	array ('9',"q9"),
	array ('10',"q10"),
	array ('11',"q11"),
	array ('12',"q12"),
	array ('13',"q13"),
	array ('14',"q14"),
	array ('15',"q15"),
	array ('16',"q16"),
	array ('17',"q17"),
	array ('18',"q18"),
	array ('19',"q19"),
	);
	
	
    shuffle($questions);

	$choice0 = array 
	(
	array (0,"A0"),
	array (1,"B0"),
	array (2,"C0"),
	array (3,"D0"));
	
	$choice1 = array 
	(
	array (0,"A1"),
	array (1,"B1"),
	array (2,"C1"),
	array (3,"D1"));
	
	$choice2 = array 
	(
	array (0,"A2"),
	array (1,"B2"),
	array (2,"C2"),
	array (3,"D2"));
	
	$choice3 = array 
	(
	array (0,"A3"),
	array (1,"B3"),
	array (2,"C3"),
	array (3,"D3"));
	
	$choice4 = array 
	(
	array (0,"A4"),
	array (1,"B4"),
	array (2,"C4"),
	array (3,"D4"));
	
	$choice5 = array 
	(
	array (0,"A5"),
	array (1,"B5"),
	array (2,"C5"),
	array (3,"D5"));
	
	$choice6 = array 
	(
	array (0,"A6"),
	array (1,"B6"),
	array (2,"C6"),
	array (3,"D6"));
	
	$choice7 = array 
	(
	array (0,"A7"),
	array (1,"B7"),
	array (2,"C7"),
	array (3,"D7"));
	
	$choice8 = array 
	(
	array (0,"A8"),
	array (1,"B8"),
	array (2,"C8"),
	array (3,"D8"));
	
	$choice9 = array 
	(
	array (0,"A9"),
	array (1,"B9"),
	array (2,"C9"),
	array (3,"D9"));

	$choice10 = array 
	(
	array (0,"A10"),
	array (1,"B10"),
	array (2,"C10"),
	array (3,"D10"));
	
	$choice11 = array 
	(
	array (0,"A11"),
	array (1,"B11"),
	array (2,"C11"),
	array (3,"D11"));
	
	$choice12 = array 
	(
	array (0,"A12"),
	array (1,"B12"),
	array (2,"C12"),
	array (3,"D12"));
	
	$choice13 = array 
	(
	array (0,"A13"),
	array (1,"B13"),
	array (2,"C13"),
	array (3,"D13"));
	
	$choice14 = array 
	(
	array (0,"A14"),
	array (1,"B14"),
	array (2,"C14"),
	array (3,"D14"));
	
	$choice15 = array 
	(
	array (0,"A15"),
	array (1,"B15"),
	array (2,"C15"),
	array (3,"D15"));
	
	$choice16 = array 
	(
	array (0,"A16"),
	array (1,"B16"),
	array (2,"C16"),
	array (3,"D16"));
	
	$choice17 = array 
	(
	array (0,"A17"),
	array (1,"B17"),
	array (2,"C17"),
	array (3,"D17"));
	
	$choice18 = array 
	(
	array (0,"A18"),
	array (1,"B18"),
	array (2,"C18"),
	array (3,"D18"));
	
	$choice19 = array 
	(
	array (0,"A19"),
	array (1,"B19"),
	array (2,"C19"),
	array (3,"D19"));
		
      shuffle($choice0); shuffle($choice1); shuffle($choice2); shuffle($choice3); shuffle($choice4); shuffle($choice5); shuffle($choice6); shuffle($choice7); shuffle($choice8); shuffle($choice9);
      shuffle($choice10); shuffle($choice11); shuffle($choice12); shuffle($choice13); shuffle($choice14); shuffle($choice15); shuffle($choice16); shuffle($choice17); shuffle($choice18); shuffle($choice19);

		$Allchoice = array (
		$choice0,$choice1,$choice2,$choice3,$choice4,$choice5,$choice6,$choice7,$choice8,$choice9,$choice10,$choice11,$choice12,$choice13,$choice14,$choice15,$choice16,$choice17,$choice18,$choice19
		);
	$numofq=5;
	for ($x=0;$x<$numofq;$x++)
	{
		$loc = $questions[$x][0];
		$y=$x+1;
			echo '<div class="questionblock">';
				echo '<p>'.$y.') '.$questions[$x][1].'</p>'; //$questions[question #][id(0) or question(1)]
				
				echo '<p class="heffect"><input id="q'.$x.'0" class="tab" name="q'.$x.'" type="radio" value="'.$Allchoice[$loc][0][0].'"> <label for="q'.$x.'0"> '.$Allchoice[$loc][0][1].' </label></p>';//$Allchoice[question #][4 answer choices(0-3)][id(0) or choice(1)]
				echo '<p class="heffect"><input id="q'.$x.'1" class="tab" name="q'.$x.'" type="radio" value="'.$Allchoice[$loc][1][0].'"> <label for="q'.$x.'1"> '.$Allchoice[$loc][1][1].' </label></p>';
				echo '<p class="heffect"><input id="q'.$x.'2" class="tab" name="q'.$x.'" type="radio" value="'.$Allchoice[$loc][2][0].'"> <label for="q'.$x.'2"> '.$Allchoice[$loc][2][1].' </label></p>';
				echo '<p class="heffect"><input id="q'.$x.'3" class="tab" name="q'.$x.'" type="radio" value="'.$Allchoice[$loc][3][0].'"> <label for="q'.$x.'3"> '.$Allchoice[$loc][3][1].' </label></p>';
				echo '<p><input class="makehidden" name="q'.$x.'" type="radio" value="4" checked></p>';				
				
			echo '</div>';
	}
	
	$_SESSION['qarray'] = $questions;
	$_SESSION['aarray'] = $Allchoice;
	$_SESSION['num'] = $numofq;


?>

	
<p class="center">
	<input type="submit" value="Submit"> 
	<input type="reset">
</p>
</div>
</form>
</body>
</html>
