<!DOCTYPE html>
<html>
<head>
    <title>Jeu JavaScript</title>
    <style type="text/css">
        #zonedejeux {
            border: 1px solid black;
        }
    </style>
</head>
<body onload="principale()">
    <h1>Jeu JavaScript</h1>
    <svg id="zonedejeux">
        <circle cx="50" cy="200" r="15" fill="red" id="player" />
        <circle cx="800" cy="200" r="10" fill="blue" id="enemy" />
    </svg>
    <script type="text/javascript">
        var playerY = 200;
        var ballY = 200;
        var enemyX = 800;
        var speed = 50;

        function principale(){
            document.onkeydown = deplacement;
            setInterval(bouger, speed);
        }

        function deplacement(evt){
            switch(evt.keyCode){
                // Up
                case 38:
                    ballY -= 15;
                    if (ballY < 15){ballY = 15;}
                    document.getElementById('player').setAttribute("cy", ballY);
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
            document.getElementById('enemy').setAttribute('cx', enemyX);
        }
    </script>
</body>
</html>