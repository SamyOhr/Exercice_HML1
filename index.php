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
       var playerY = 200;
var ballY = 200;
var enemyX = 800;
var speed = 50; // milliseconds

function principale(){
    // Set up the game
    document.addEventListener('keydown', deplacement);
    setInterval(bouger, speed);
}

function bouger() {
    // Move the enemy ball from right to left
    enemyX -= 5;
    document.getElementById('enemy').setAttribute('cx', enemyX);

    // Check if the ball is out of the screen
    if (enemyX < -10) {
        enemyX = 800; // Reset the position to the right edge of the screen
        document.getElementById('enemy').setAttribute('cx', enemyX);
    }
}

function deplacement(evt){
    // Move the player ball up or down based on the arrow key pressed
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