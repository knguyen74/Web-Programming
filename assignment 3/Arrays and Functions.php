<!DOCTYPE html>
<html>
<head>
<title>Arrays and Functions</title>
</head>

 <body>
 
 <?php
	$month = array ('January', 'February', 'March', 'April',
	 'May', 'June', 'July', 'August',
	 'September', 'October', 'November', 'December');
	 
	 for($a=0;$a<12;$a++)
	 {
		 echo $month[$a];
		 echo '<br>';
	 }
	 echo '<br>';
	 function calendarSort($month)
	 {
		 sort($month);
		 for($a=0;$a<12;$a++)
		 {
			 echo $month[$a];
			 echo '<br>';
		 }
		echo '<br>';
	 }
	 calendarSort($month);

	 
	 foreach($month as $value)
	 { 
		echo $value;   
		echo '<br>';		
	 }
	 echo '<br>';		

	sort($month);
	foreach($month as $value)
	 { 
		echo $value;   
		echo '<br>';		
	 }
	 
 ?> 

 </body>
 
</html>