   var hourlywage=15;
   var overtimewage=hourlywage*1.5;
	var hours=[];
	var pay=[];
	function formula() {
		if(isNaN(document.getElementById("user_input").value))
		{
			alert("Input is not a Number");
		}
		else if(document.getElementById("user_input").value<-1)
		{
			alert("Input can not be below -1");
		}
		else if(document.getElementById("user_input").value>40)
		{
			var workerpay=(document.getElementById("user_input").value-40)*overtimewage+40*hourlywage;
			hours[hours.length]=document.getElementById("user_input").value;
			pay[pay.length]=workerpay;
		}
		else if(document.getElementById("user_input").value<=40&&document.getElementById("user_input").value>-1)
		{
			var workerpay=document.getElementById("user_input").value*hourlywage;
			hours[hours.length]=document.getElementById("user_input").value;
			pay[pay.length]=workerpay;
		}
		else if(document.getElementById("user_input").value==-1)
		{
			if(hours.length==0)
			{
				alert("No empoyee hours have been inputed yet");
			}
			else
			{
			var x = document.createElement("TABLE");
			x.setAttribute("id", "myTable");
			document.body.appendChild(x);

			for(var counter=0;counter<hours.length;counter++)
			{
				var y = document.createElement("TR");
				y.setAttribute("id", "myTr"+counter);
				document.getElementById("myTable").appendChild(y);
				
				var z0 = document.createElement("TD");
				var z1 = document.createElement("TD");
				var z2 = document.createElement("TD");

				var t0 = document.createTextNode(counter+1);
				var t1 = document.createTextNode(hours[counter]);
				var t2 = document.createTextNode(pay[counter]);

				z0.appendChild(t0);
				z1.appendChild(t1);
				z2.appendChild(t2);

				document.getElementById("myTr"+counter).appendChild(z0);
				document.getElementById("myTr"+counter).appendChild(z1);
				document.getElementById("myTr"+counter).appendChild(z2);



			}
			var header = myTable.createTHead();
			var row = header.insertRow(0);
			var cell0 = row.insertCell(0);
			var cell1 = row.insertCell(1);
			var cell2 = row.insertCell(2);

			cell0.innerHTML = "<b>Index<b>";
			cell1.innerHTML = "<b>Hours Worked if the Week</b>";
			cell2.innerHTML = "<b>Pay For the Week</b>";

			
			document.getElementById("btn").disabled = true;
			}
		}
		else
		{
			alert("Error: unexpected input");
		}
		

    }