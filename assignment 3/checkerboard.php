<!DOCTYPE html>
<html>
<head>
<title>Checker Board</title>
</head>

 <body>
 <!--the overall table height is 323px while width is 300px b/c only the width of a table can restricted by the css easily -->
 <?php
 echo '<table border="1" width="300"  cellpadding="1" cellspacing="1">'; 
for ($x=0;$x<=7;$x++){
	echo '<tr>'; 
	for ($y=0;$y<=7;$y++)
	{
	if(($x+$y)%2=="0")
		{echo '<td bgcolor="red" width="35px" height="35px"></td>'; }
	else
		{echo '<td bgcolor="black" width="35px" height="35px"></td>'; }
	}
	echo '</tr>'; 
} 
echo '</table>'; 
 ?> 

 </body>
 
</html>