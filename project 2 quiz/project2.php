<!DOCTYPE html>
<html lang="en">
<head>
  <title>Zooland</title>
  <link rel="stylesheet" type="text/css" href="project2.css">
</head>



<body>
<form action="project2-1.php" 
method="post"> 
<div class="one">
<?php
	session_start();

	echo '<h1 class="center">Zooland</h1>';
	
		$questions = array (
	array ('0'," How many stomachs does a cow have?"), 	//original position
	array ('1'," What is the longest snake?"),
	array ('2'," What is the largest Frog?"),
	array ('3'," What is the fastest bird (in the air) in the world?"),
	array ('4'," What is the largest kind of shark?"),
	array ('5'," How long can a shark go without eating?"),
	array ('6'," About how many different kinds of sharks are there?"),
	array ('7'," What are baby rabbits called?"),
	array ('8'," Which if these is NOT a breed of rabbit?"),
	array ('9'," How many dog years are in a human year?"),
	array ('10',"What is a baby deer called?"),
	array ('11',"What is the largest animal on the planet"),
	array ('12',"Which monkey is the world's fastest primate?"),
	array ('13',"Where do Gelada Monkeys live?"),
	array ('14',"What is the most popular purebred cat breed?"),
	array ('15',"Which one of these birds is a type of parrot? "),
	array ('16',"Where do golden hamster live in the wild?"),
	array ('17',"Which one is the fastest snake in the world?"),
	array ('18',"What is the most popular dog breed in the U.S.?"),
	array ('19',"Which one is the most acute sense for a dog?"),
	);

	
    shuffle($questions);

	$choice0 = array 
	(
	array (0," 4"),
	array (1," 1"),
	array (2,"2"),
	array (3,"3"));
	
	$choice1 = array 
	(
	array (0," Reticulated python"),
	array (1," Anaconda"),
	array (2," Green tree snake"),
	array (3," Corn snake"));
	
	$choice2 = array 
	(
	array (0," African Goliath Frog"),
	array (1," Poison Dart Frog"),
	array (2," Cane Toad"),
	array (3," North American Bullfrog"));
	
	$choice3 = array 
	(
	array (0," Peregrine falcon"),
	array (1," Red-billed quelea"),
	array (2," Ruby Throated Hummingbird"),
	array (3," North African ostrich"));
	
	$choice4 = array 
	(
	array (0," Whale Shark"),
	array (1," Basking Shark"),
	array (2," Great White Shark"),
	array (3," Great Hamerhead Shark"));
	
	$choice5 = array 
	(
	array (0," A month"),
	array (1," 2 weeks"),
	array (2," 1 week"),
	array (3," 3 days"));
	
	$choice6 = array 
	(
	array (0," 350 - 450"),
	array (1," Under 250"),
	array (2," 250 - 350"),
	array (3," Over 500"));
	
	$choice7 = array 
	(
	array (0," Kits"),
	array (1," Pups"),
	array (2," Cuties"),
	array (3," Baby rabbits"));
	
	$choice8 = array 
	(
	array (0," Devon Rex"),
	array (1," Californian"),
	array (2," Thrianta"),
	array (3," Hulstlander"));
	
	$choice9 = array 
	(
	array (0,"7"),
	array (1,"5"),
	array (2,"11"),
	array (3,"30"));

	$choice10 = array 
	(
	array (0," Fawn"),
	array (1," Deer"),
	array (2," Cow"),
	array (3," Meow"));
	
	$choice11 = array 
	(
	array (0,"Blue whale"),
	array (1,"Giraffe"),
	array (2,"Anaconda"),
	array (3,"Rhino"));
	
	$choice12 = array 
	(
	array (0,"Patas Monkey"),
	array (1,"Gorilla"),
	array (2,"Howler Monkey"),
	array (3,"Spider Monkey"));
	
	$choice13 = array 
	(
	array (0,"Ethiopia"),
	array (1,"Colombia"),
	array (2,"India"),
	array (3,"Costa Rica"));
	
	$choice14 = array 
	(
	array (0,"Persian"),
	array (1,"Siamese"),
	array (2,"Russian Blue"),
	array (3,"Maine Coon"));
	
	$choice15 = array 
	(
	array (0,"Parakeet"),
	array (1,"Canary"),
	array (2,"Finch"),
	array (3,"All of the above"));
	
	$choice16 = array 
	(
	array (0,"Middle East"),
	array (1,"North America"),
	array (2,"Australia"),
	array (3,"Europe"));
	
	$choice17 = array 
	(
	array (0,"Black Mamba"),
	array (1,"Viper"),
	array (2,"Python"),
	array (3,"Cobra"));
	
	$choice18 = array 
	(
	array (0,"Labrador Retriever"),
	array (1,"Poodle"),
	array (2,"Beagle"),
	array (3,"German Shepherd"));
	
	$choice19 = array 
	(
	array (0,"Smell"),
	array (1,"Hearing"),
	array (2,"Sight"),
	array (3,"Taste"));

		
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
