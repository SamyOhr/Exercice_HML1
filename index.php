<html>
<head>
<style>
#zonedejeux{background-color:antiquewhite;
			width:900px; height:400px;
			position:absolute; top:3px; left:3px;
			z-index:1;}
h1{position:absolute;top:-7px; left:320px; z-index:2;}
</style>
</head>
<body onload="principale()">
    <h1>Jeu Javascript</h1>
    <svg id="zonedejeux">
	<circle cx="450" cy="200" r="15" fill="tomato" id="player" />>
        <circle cx="850" cy="200" r="15" fill="blue" id="enemy" />
    </svg>
    <script>
    var playerY = 200;
    var ballY = 200;
    var enemyX = 850;
    var speed = 20;

    function principale(){
        window.addEventListener("keydown", deplacement, false);
        setInterval(bouger, speed);
    }

    function deplacement(evt) {
            var code = evt.keyCode;
            var ballY = playerY;

            switch (code) {
                // Right
                case 39:
                    var ballX = document.getElementById('player').getAttribute('cx');
                    ballX = parseInt(ballX) + 15;
                    if (ballX > 885) {ballX = 885;}
                    document.getElementById('player').setAttribute("cx", ballX);
                    break;

                // Up
                case 38:
                    ballY -= 15;
                    if (ballY < 15){ballY = 15;}
                    document.getElementById('player').setAttribute("cy", ballY);
                    break;

                // Left
                case 37:
                    var ballX = document.getElementById('player').getAttribute('cx');
                    ballX = parseInt(ballX) - 15;
                    if (ballX < 15) {ballX = 15;}
                    document.getElementById('player').setAttribute("cx", ballX);
                    break;

                // Down
                case 40:
                    ballY += 15;
                    if (ballY > 385){ballY = 385;}
                    document.getElementById('player').setAttribute("cy", ballY);
                    break;
            }

        playerY = ballY;
    }

    function bouger(){
    var ballX = parseInt(document.getElementById('ball').getAttribute("cx"));
    var ballY = parseInt(document.getElementById('ball').getAttribute("cy"));

    var ennemy_ballX = parseInt(document.getElementById('ennemy_ball').getAttribute("cx"));
    var ennemy_ballY = parseInt(document.getElementById('ennemy_ball').getAttribute("cy"));

    if (ballY > ennemy_ballY) {
        ennemy_ballY += 15;
    } else if (ballY < ennemy_ballY) {
        ennemy_ballY -= 15;

    }

    if (ennemy_ballY < 0){
        ennemy_ballY = rayon;
    } 
    if (ennemy_ballY > height){
        ennemy_ballY =  height - rayon;
    }
    
    ennemy_ballX-= 15;
        if (ennemy_ballX <= 15) {
            ennemy_ballX = width - rayon;
        }
    document.getElementById('ennemy_ball').setAttribute("cx",ennemy_ballX);
    document.getElementById('ennemy_ball').setAttribute("cy",ennemy_ballY);
    </script>
</body>
</html>

        

          