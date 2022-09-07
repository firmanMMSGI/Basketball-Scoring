<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Basketball Scoreboard by MMSGI</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <main class="scoreboard">
                <h1>Register Player</h1>
                <form action="new_game.html" method="post">
                    <table>
                        <tr>
                            <td align="center"><h2>Player 1</h2></td>
                            <td></td>
                            <td align="center"><h2>Player 2</h2></td>
                         </tr>
                         <tr>   
                            <td><input type="text" id="player1" name="player1"/></td>
                            <td align="center" style="color:red"><h2>VS</h2></td>
                            <td><input type="text" id="player2" name="player2"/></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" value="Register">
                            </td>
                            <td></td>
                        </tr>                    
                    </table>
                </form>

        </main>
        <script src="index.js"></script>
    </body>
</html>

