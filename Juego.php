
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Batalla Naval</title>
</head>
<body>
    <h1>Batalla Naval</h1>
    <h3>Dificultad de juego</h3>
    <form action="Juego.php" method="POST">
            <select name="gamemode" required>
                <option value="Fácil">Fácil</option>
                <option value="Normal">Normal</option>
                <option value="Difícil">Difícil</option>
            </select>
        <h2>Vidas: 
        <?php
            $letras=["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M"];
            $ModoDeJuego=5;
            $vidas;
            if($_POST["gamemode"]=="Fácil"){
                $ModoDeJuego=8;
                $vidas=10;
            }
            elseif($_POST["gamemode"]=="Normal"){
                $ModoDeJuego=10;
                $vidas=8;
            }
            else{
                $ModoDeJuego=13;
                $vidas=9;
            }
             for($i = 1; $i <= $vidas; $i++){
                    echo "<img src='./vidas.png' width='20px' height='20px'>";
                }
        ?>
        </h2>
        <table border="1">
            <body>
                <?php 
                    echo "<tr>";
                    echo "<td></td>";
                        for($a = 0; $a < $ModoDeJuego; $a++){
                            echo "<td>$letras[$a]</td>";
                        }
                    echo "</tr>";
                    for($m = 1; $m <= $ModoDeJuego; $m++){
                        echo "<tr>";
                            echo "<td><h3>$m</h3></td>";
                            for($t = 1; $t <= $ModoDeJuego; $t++){
                                echo "<td><img src='./barco.jpg' width='60px' heigth='60px'></td>";
                            }
                        echo "</tr>";
                    }
                ?> 
            </body>
        </table>
        <label>
            <input type="text" name="Nombre">
        </label>
        <label>
            <input type="number" name="Número">
        </label>
        <br>
        
        <input type="submit">
        <input type="reset">
    </form>
</body>
</html>