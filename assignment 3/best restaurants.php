<!DOCTYPE html>
<html>
<head>
<title>Best Restaurants</title>
</head>

 <body>
 
 <?php
	$name = array ('Chama Gaucha', 'Aviva by Kameel', 'Bone’s Restaurant', 'Umi Sushi Buckhead',
	 'Fandangles', 'Capital Grille', 'Canoe', 'One Flew South',
	 'Fox Bros. BBQ', 'South City Kitchen Midtown');
	$aCost = array ('40.50', '15.00', '65.00', '40.50',
	 '30.00', '60.50', '35.50', '21.00',
	 '15.00', '29.00');
	function makeTable($name, $aCost)
	{
		 echo '<table border="1">'; 
		 	echo '<tr>'; 
		 	echo '<th>Restaurant Name</th>'; 
			echo '<th>Average Cost</th>'; 
			echo '</tr>'; 
		for ($x=0;$x<10;$x++)
		{
			echo '<tr>'; 
			echo '<td>'.$name[$x].'</td>'; 
			echo '<td>'.$aCost[$x].'</td>'; 
			echo '</tr>'; 
		} 
		echo '</table>'; 
		echo '<br>';
	}
	function byName($name, $aCost)
	{
		array_multisort($name, $aCost);
		makeTable($name, $aCost);
	}
	function byCost($name, $aCost)
	{
		array_multisort($aCost, $name);
		maketable($name, $aCost);
	}
			maketable($name, $aCost);
			byCost($name, $aCost);
	 		byName($name, $aCost);

 ?> 

 </body>
 
</html>