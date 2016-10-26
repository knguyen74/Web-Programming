var x = Math.floor((Math.random() * 100) + 1);
var attempts=0;
var limit=10;
function formula() 
{
	if(document.getElementById("user_input").value<x)
	{
			attempts++;
			var amount=limit-attempts;
			if (amount!=0)
			{
				document.getElementById('display').innerHTML = "My number is greater than "+document.getElementById("user_input").value+"<br>"+amount+" attempts left<br>Guess Again";	
			}
			else
			{
				document.getElementById('display').innerHTML = "My number is greater than "+document.getElementById("user_input").value+"<br>"+amount+" attempts left";	
				alert("You have used all of your attempts.\n My number was "+x);
				document.getElementById("btn0").disabled = true;
				document.getElementById("btn1").style.display="inline";
			}
	}
	else if(document.getElementById("user_input").value>x)
	{
			attempts++;
			var amount=limit-attempts;
			if(amount!=0)
			{
				document.getElementById('display').innerHTML = "My number is less than "+document.getElementById("user_input").value+"<br>"+amount+" attempts left<br>Guess Again";	
			}
			else
			{
				document.getElementById('display').innerHTML = "My number is less than "+document.getElementById("user_input").value+"<br>"+amount+" attempts left";	
				alert("You have used all of your attempts.\n My number was "+x);
				document.getElementById("btn0").disabled = true;
				document.getElementById("btn1").style.display="inline";
			}
	}
	else if(document.getElementById("user_input").value==x)
	{
			document.getElementById('display').innerHTML = "You found my number";	
			document.getElementById("btn0").disabled = true;
			document.getElementById("btn1").style.display="inline";
	}
}

