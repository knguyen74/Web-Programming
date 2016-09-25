<!DOCTYPE html>
<html>
<head>
<title>Charlie ate my Lunch!</title>
</head>

 <body>
 <?php
 
 
 function isBitten()
 {
	$r = rand(0,10);
	if( $r > "4")
		{return true;}
	else
		{return false;}
 }
 
if (isBitten())
	{echo "Charlie ate my lunch!";} 
else	
	{echo "Charlie did not eat my lunch!";} 
 ?> 
 
 
 </body>
 
</html>