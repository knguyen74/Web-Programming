var memory_array0 = ['A','A','B','B','C','C','D','D','E','E','F','F','G','G','H','H','I','I','J','J','K','K','L','L'];
var memory_array1 = ['A','A','B','B','C','C','D','D','E','E','F','F','G','G','H','H','I','I','J','J'];
var memory_array2 = ['A','A','B','B','C','C','D','D','E','E','F','F','G','G','H','H'];
var Allboards = [memory_array2,memory_array1,memory_array0];
var memory_array;

var numchoice;
var timeshown;
var countdown;
var timer;

var fades;
var fadevalue=1;
var tilefade0;
var tilefade1;

var memory_values = [];
var memory_tile_ids = [];
var tiles_flipped = 0;

Array.prototype.memory_tile_shuffle = function(){
    var i = this.length, j, temp;
    while(--i > 0){
        j = Math.floor(Math.random() * (i+1));
        temp = this[j];
        this[j] = this[i];
        this[i] = temp;
    }
}
function startcountdown() {
enablediv();
document.getElementById("later").style.display="inline";
timer = setInterval(myTimer, 1000);
}
function myTimer() 
{
	if(countdown==0)
	{
		clearInterval(timer);
		document.getElementById("thecountdown").innerHTML = countdown;
		disablediv();
		alert("Game Over\nYou Lose\nTo play again press new game");
	}
	else
	{
    document.getElementById("thecountdown").innerHTML = countdown;
	countdown--;
	}
}
function start()
{
	document.getElementById("btn1").disabled = true;
	displayboard();
	setTimeout(startcountdown,timeshown)
}
function newBoard(){
	numchoice = document.getElementById("num").value;
	timeshown=document.getElementById("dif").value;
	memory_array=Allboards[numchoice];
	document.getElementById("btn0").disabled = true;
	document.getElementById("num").disabled = true;
	document.getElementById("dif").disabled = true;
	
	

	if(numchoice==0)
	{
		countdown=120;
		document.getElementById('memory_board').style = "width:535px;"
	}
	else if(numchoice==1)
	{
		countdown=150;
		document.getElementById('memory_board').style = "width:665px;"

	}
	else
	{
		countdown=180;
		document.getElementById('memory_board').style = "width:800px;"
	}
	
	tiles_flipped = 0;
	var output = '';
    memory_array.memory_tile_shuffle();
	for(var i = 0; i < memory_array.length; i++){
		output += '<div id="tile_'+i+'" onclick="memoryFlipTile(this,\''+memory_array[i]+'\')"></div>';
	}
	document.getElementById('memory_board').innerHTML = output;
	for(var e=0;e<memory_array.length;e++)
	{
	document.getElementById('tile_'+e).style.backgroundImage = 'url(img0.png)';
	document.getElementById('tile_'+e).style.backgroundSize = '113px 113px';
	document.getElementById('tile_'+e).innerHTML= "";
	}
	disablediv();
	document.getElementById("btn1").style.display="inline";
	document.getElementById("btn2").style.display="inline";
}
function disablediv()
{
	for(var c=0;c<memory_array.length;c++)
	{
	document.getElementById('tile_'+c).style.pointerEvents = "none"
	}
}
function enablediv()
{
	for(var d=0;d<memory_array.length;d++)
	{
	document.getElementById('tile_'+d).style.pointerEvents = "auto"
	}
}
function flipalldown()
{
	for(var b=0;b<memory_array.length;b++)
	{
	document.getElementById('tile_'+b).style.backgroundImage = 'url(img0.png)';
	document.getElementById('tile_'+b).style.backgroundSize = '113px 113px';
	document.getElementById('tile_'+b).innerHTML= "";
	}
	disablediv();
}
function displayboard()
{
	for(var a=0;a<memory_array.length;a++)
	{
	switch(memory_array[a]) {
    case "A":
		document.getElementById('tile_'+a).style.backgroundImage = 'url(img1.jpg)';
        break;
    case "B":
		document.getElementById('tile_'+a).style.backgroundImage = 'url(img2.jpg)';
        break;
    case "C":
		document.getElementById('tile_'+a).style.backgroundImage = 'url(img3.jpg)';
        break;
    case "D":
		document.getElementById('tile_'+a).style.backgroundImage = 'url(img4.jpg)';
        break;
	case "E":
		document.getElementById('tile_'+a).style.backgroundImage = 'url(img5.jpg)';
        break;
    case "F":
		document.getElementById('tile_'+a).style.backgroundImage = 'url(img6.jpg)';
        break;
	case "G":
		document.getElementById('tile_'+a).style.backgroundImage = 'url(img7.jpg)';
        break;
    case "H":
		document.getElementById('tile_'+a).style.backgroundImage = 'url(img8.jpg)';
        break;
    case "I":
		document.getElementById('tile_'+a).style.backgroundImage = 'url(img9.jpg)';
        break;
    case "J":
		document.getElementById('tile_'+a).style.backgroundImage = 'url(img10.jpg)';
        break;
	case "K":
		document.getElementById('tile_'+a).style.backgroundImage = 'url(img11.jpg)';
        break;
    case "L":
		document.getElementById('tile_'+a).style.backgroundImage = 'url(img12.jpg)';
        break;
}
		document.getElementById('tile_'+a).style.backgroundSize = '113px 113px';
	}
	setTimeout(flipalldown, timeshown);
}
function fadeout()
{
	if(fadevalue<=0)
	{
		clearInterval(fades);
		fadevalue=1;
		document.getElementById(tilefade0).removeAttribute("onclick");
		document.getElementById(tilefade1).removeAttribute("onclick");
		enablediv();
	}
	else
	{
	fadevalue=fadevalue-.2;
	document.getElementById(tilefade0).style.opacity=fadevalue;
	document.getElementById(tilefade1).style.opacity=fadevalue;
	}
}
function memoryFlipTile(tile,val){
	if(tile.innerHTML == "" && memory_values.length < 2){

	switch(val) {
    case "A":
		tile.style.backgroundImage = 'url(img1.jpg)';
        break;
    case "B":
		tile.style.backgroundImage = 'url(img2.jpg)';
        break;
    case "C":
		tile.style.backgroundImage = 'url(img3.jpg)';
        break;
    case "D":
		tile.style.backgroundImage = 'url(img4.jpg)';
        break;
	case "E":
		tile.style.backgroundImage = 'url(img5.jpg)';
        break;
    case "F":
		tile.style.backgroundImage = 'url(img6.jpg)';
        break;
	case "G":
		tile.style.backgroundImage = 'url(img7.jpg)';
        break;
    case "H":
		tile.style.backgroundImage = 'url(img8.jpg)';
        break;
    case "I":
		tile.style.backgroundImage = 'url(img9.jpg)';
        break;
    case "J":
		tile.style.backgroundImage = 'url(img10.jpg)';
        break;
	case "K":
		tile.style.backgroundImage = 'url(img11.jpg)';
        break;
    case "L":
		tile.style.backgroundImage = 'url(img12.jpg)';
        break;
}
		tile.style.backgroundSize = '113px 113px';

		//tile.innerHTML = val;
		if(memory_values.length == 0){
			memory_values.push(val);
			memory_tile_ids.push(tile.id);
		} else if(memory_values.length == 1){

			memory_values.push(val);
			memory_tile_ids.push(tile.id);
			if(memory_values[0] == memory_values[1]){
				disablediv();
				tilefade0=memory_tile_ids[0];
				tilefade1=memory_tile_ids[1];

				fades = setInterval(fadeout, 500);
				tiles_flipped += 2;
				// Clear both arrays
				memory_values = [];
            	memory_tile_ids = [];
				// Check to see if completed
				if(tiles_flipped == memory_array.length){
					alert("Board cleared\nYou won with "+(countdown+1)+" seconds left");
					document.getElementById('memory_board').innerHTML = "You won<br>To play again press new game";
					clearInterval(timer);
				}
			} else {
				function flip2Back(){
				    // Flip the 2 tiles back over
				    var tile_1 = document.getElementById(memory_tile_ids[0]);
				    var tile_2 = document.getElementById(memory_tile_ids[1]);
				    tile_1.style.backgroundImage = 'url(img0.png)';
					tile_1.style.backgroundSize = '113px 113px';
            	    tile_1.innerHTML = "";
				    tile_2.style.backgroundImage = 'url(img0.png)';
					tile_2.style.backgroundSize = '113px 113px';
            	    tile_2.innerHTML = "";
				    // Clear both arrays
				    memory_values = [];
            	    memory_tile_ids = [];
				}
				setTimeout(flip2Back, 700);
			}
		}
	}
}