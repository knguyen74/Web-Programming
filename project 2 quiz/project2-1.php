<html> 
<head><title>Answers</title></head> 
<link rel="stylesheet" type="text/css" href="project2.css">
<body>
<form action="project2.php" 
method="post"> 

<div>
<?php 
session_start();
$questions = $_SESSION['qarray'];
$Allchoice = $_SESSION['aarray'];
$numofq = $_SESSION['num'];

echo '<table>';
for ($x=0;$x<$numofq;$x++)
{
	echo '<tr>';
	echo '<td class="topalign">';
		if($_POST["q".$x]==0)
		{
			echo '<img class="chg" src="check.png" alt="image missing">';
		}
		else
		{
			echo '<img class="chg" src="x.png" alt="image missing">';
		}
	echo '</td>';
	echo '<td>';
		$loc = $questions[$x][0];
		$y=$x+1;
		echo '<div class="questionblock">';
			echo '<p>'.$y.') '.$questions[$x][1].'</p>'; //$questions[question #][id(0) or question(1)]
			if($_POST["q".$x]==$Allchoice[$loc][0][0])
			{
				echo '<p><input name="q'.$x.'" type="radio" value="basic" checked disabled> '.$Allchoice[$loc][0][1].' </p>';//$Allchoice[question #][4 answer choices(0-3)][id(0) or choice(1)]
			}
			else
			{
				echo '<p><input name="q'.$x.'" type="radio" value="basic" disabled> '.$Allchoice[$loc][0][1].' </p>';
			}
			if($_POST["q".$x]==$Allchoice[$loc][1][0])
			{
				echo '<p><input name="q'.$x.'" type="radio" value="basic" checked disabled> '.$Allchoice[$loc][1][1].' </p>';
			}
			else
			{
				echo '<p><input name="q'.$x.'" type="radio" value="basic" disabled> '.$Allchoice[$loc][1][1].' </p>';
			}	
			if($_POST["q".$x]==$Allchoice[$loc][2][0])
			{
				echo '<p><input name="q'.$x.'" type="radio" value="basic" checked disabled> '.$Allchoice[$loc][2][1].' </p>';
			}
				else
			{
				echo '<p><input name="q'.$x.'" type="radio" value="basic" disabled> '.$Allchoice[$loc][2][1].' </p>';
			}
			if($_POST["q".$x]==$Allchoice[$loc][3][0])
			{
				echo '<p><input name="q'.$x.'" type="radio" value="basic" checked disabled> '.$Allchoice[$loc][3][1].' </p>';
			}
			else
			{
				echo '<p><input name="q'.$x.'" type="radio" value="basic" disabled> '.$Allchoice[$loc][3][1].' </p>';
			}
		echo '</div>';
	echo '</td>';
	echo '</tr>';
}
echo '</table>';

session_unset(); 
session_destroy(); 
?>

<input type="submit" value="Reset"> 
</div>
</form>
</body> 
</html> 