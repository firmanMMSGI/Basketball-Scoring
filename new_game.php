<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <title>Basketball Scoreboard by MMSGI</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <main class="scoreboard">
            <section id="time"></section>
            <section class="scores">
                <div class="home">
                    <h1 id="home-header">
                        <?php
                            if(isset($_POST['player1'])) {
                                echo $_POST['player1'];
                            }else{
                                echo "No Name";
                            }
                        ?>
                    </h1>
                    <div id="home-score"></div>
                    <div class="buttons">
                        <button id="home-one" onclick="homePoints(1)">+1</button>
                        <button id="home-two" onclick="homePoints(2)">+2</button>
                        <button id="home-three" onclick="homePoints(3)">+3</button>
                    </div>
                </div>
                <div class="period-div">
                    <h3>Period</h3>
                    <div id="period">1</div>
                </div>
                <div class="guest">
                    <h1 id="guest-header">
                        <?php
                            if(isset($_POST['player2'])) {
                                echo $_POST['player2'];
                            }else{
                                echo "No Name";
                            }
                        ?>
                    </h1>
                    <div id="guest-score"></div>
                    <div class="buttons">
                        <button id="guest-one" onclick="guestPoints(1)">+1</button>
                        <button id="guest-two" onclick="guestPoints(2)">+2</button>
                        <button id="guest-three" onclick="guestPoints(3)">+3</button>
                    </div>
                </div>
            </section>
            <section class="button_game">
                <button id="new-game" onclick="newGame()">New game</button>
                <button id="start-game" onclick="startGame()">Start game</button>
                <button id="pause-game" onclick="pauseGame()">Pause game</button>
            </section>
        </main>
        <script src="index.js"></script>
    </body>
</html>