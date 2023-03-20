<html>
<head>
<style>
#zonedejeux{background-color:antiquewhite;
			width:900px; height:400px;
			position:absolute; top:3px; left:3px;
			z-index:1;}
h1{position:absolute;top:-7px; left:320px; z-index:2;}
</style>

<script>
//var globale
var speed = 500;

function principale(){
	//Ajout d'un écouteur sur les touches
	window.addEventListener('keydown', deplacement, true);
	//Lance la fonction bouger() à interval de "speed"
	enemy = setInterval(bouger, speed);
	
}

function bouger(){

	//Code à créer pour faire bouger la boule enemy
	
}


function deplacement(evt) {
		   var ballX = parseInt(document.getElementById('ball').getAttribute("cx"));
		   var ballY = parseInt(document.getElementById('ball').getAttribute("cy"));
           switch (evt.keyCode) {
                // Gauche 
                case 37:
					ballX -= 15;
                    if(ballX<15){ballX=15;}
					document.getElementById('ball').setAttribute("cx", ballX);
					break;
                // Droite 
                case 39:
					ballX -= 15;
                    if(ballX<15){ballX=15;}
					document.getElementById('ball').setAttribute("cx", ballX);
					break;

				// Haut 
                case 38:
					ballX -= 15;
                    if(ballX<15){ballX=15;}
					document.getElementById('ball').setAttribute("cx", ballX);
					break;

				// Bas 
                case 40:

					ballX -= 15;
                    if(ballX<15){ballX=15;}
					document.getElementById('ball').setAttribute("cx", ballX);
					break;
            }

}

	 
</script>
</head>
<body onload="principale()">
	<h1>Jeux Javascript</h1>
	<svg id="zonedejeux">
	<circle cx="450" cy="200" r="15" fill="tomato" id="ball" />
	
	</svg>
<body>
</html>
