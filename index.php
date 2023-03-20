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
        <circle cx="50" cy="200" r="15" fill="red" id="player" />
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

    function bouger() {
        // Move the enemy ball from right to left
        enemyX -= 5;
        if (enemyX < -15) {
            enemyX = 850;
        }
        document.getElementById('enemy').setAttribute('cx', enemyX);
    }
    </script>
</body>
</html>

        

          