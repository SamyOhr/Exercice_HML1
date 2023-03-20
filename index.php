<!DOCTYPE html>
<html>
<head>
    <title>Jeux Javascript</title>
    <meta charset="utf-8">
    <style type="text/css">
        #zonedejeux {
            width: 900px;
            height: 400px;
            border: 1px solid black;
        }
    </style>
</head>
<body onload="principale()">
    <h1>Jeux Javascript</h1>
    <svg id="zonedejeux">
        <circle cx="450" cy="200" r="15" fill="tomato" id="player" />
        <circle cx="800" cy="200" r="10" fill="blue" id="enemy" />
    </svg>
    <script type="text/javascript">
        var playerY = 200;   // Initial position of the player circle
        var enemyX = 800;    // Initial position of the enemy circle
        var speed = 50;      // Speed of enemy movement (ms)

        function principale() {
            // Add listener to arrow keys
            document.addEventListener('keydown', deplacement);

            // Start moving the enemy ball
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
            document.getElementById('enemy').setAttribute('cx', enemyX);
        }
    </script>
</body>
</html>