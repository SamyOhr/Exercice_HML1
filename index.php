<!DOCTYPE html>
<html>
<head>
    <title>Jeu de balle SVG</title>
    <style>
        circle {
            fill: black;
        }
        #player {
            fill: red;
        }
        #enemy {
            fill: blue;
        }
    </style>
</head>
<body>
    <svg viewBox="0 0 800 400" width="800" height="400">
        <circle id="player" r="15" cx="50" cy="200" />
        <circle id="enemy" r="15" cx="750" cy="200" />
    </svg>

    <script>
    var playerY = 200;
    var ballY = 200;
    var enemyX = 750;
    var speed = 10;

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

    function deplacer(event) {
        switch(event.keyCode){
        // Up
        case 38:
            ballY -= 15;
            if (ballY < 15){ballY = 15;}
            break;

        // Down
        case 40:
            ballY += 15;
            if (ballY > 385){ballY = 385;}
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
   
  