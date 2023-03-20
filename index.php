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

    function principale() {
        document.addEventListener("keydown", (event) => {
            deplacer(event);
        });

        // Start moving the player ball
        setInterval(jouer, speed);
        // Start moving the enemy ball
        setInterval(bouger, speed);
    }
	function jouer() {
        document.getElementById('player').setAttribute("cy", ballY);
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
        var diff = ballY - enemyY;
        if (diff > 0) {
            enemyY += 2;
        } else if (diff < 0) {
            enemyY -= 2;
        }
        if (enemyY < 15){enemyY = 15;}
        if (enemyY > 385){enemyY = 385;}
        document.getElementById('enemy').setAttribute('cy', enemyY);
    }

    principale();
    </script>
</body>
</html>

          