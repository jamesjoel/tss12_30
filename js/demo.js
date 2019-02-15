function start()
		{
			var div = document.createElement("div");
			div.style.height="10px";
			div.style.width="10px";
			div.style.float="left";

			var color="";

			for(var i=1; i<=6; i++)
			{
				var x = Math.floor(Math.random()*15);
				switch(x){
					case 10 : color+="A";
							break;
					case 11 : color+="B";
							break;
					case 12 : color+="C";
							break;
					case 13 : color+="D";
							break;
					case 14 : color+="E";
							break;
					case 15 : color+="F";
							break;
					default : color +=x;

				}

				
			}





			div.style.backgroundColor="#"+color;




			document.getElementById("body").appendChild(div);

			setTimeout("start()", 10);
		}