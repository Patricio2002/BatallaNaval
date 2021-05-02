<?php
    $mododejuego = (isset($_POST["gamemode"]) && $_POST["gamemode"] != "") ?$_POST["gamemode"] : "No especifico";
    
    $vidasfácil = 10;
    $vidasnormal = 8;
    $vidasdifícil = 9;

    $tablerofácil = 8;
    $tableronormal = 10;
    $tablerodifícil = 13;

    $letras = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M"];
?>

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
    <select name="gamemode" required>
        <option value="Fácil">Fácil</option>
        <option value="Normal">Normal</option>
        <option value="Difícil">Difícil</option>
    </select>
    <h2>Vidas: 
        <?php
            echo $mododejuego;
            /*for($i = 1; $i <= $vidasfácil; $i++){
                echo "<img src='./vidas.png' width='20px' height='20px'>";
            }*/

            /*for($i = 1; $i <= $vidasnormal; $i++){
                echo "<img src='./vidas.png' width='20px' height='20px'>";
            }*/

            for($i = 1; $i <= $vidasdifícil; $i++){
                echo "<img src='./vidas.png' width='20px' height='20px'>";
            }
        ?>
    </h2>
    <table border="1">
        <body>
            <?php 
                if($mododejuego === "Fácil"){
                    echo "<tr>";
                    echo "<td></td>";
                        for($a = 0; $a < $tablerofácil; $a++){
                            echo "<td>$letras[$a]</td>";
                        }
                    echo "</tr>";

                    for($m = 1; $m <= $tablerofácil; $m++){
                        echo "<tr>";
                            echo "<td><h3>$m</h3></td>";
                            for($t = 1; $t <= $tablerofácil; $t++){
                                echo "<td><img src='./barco.jpg' width='60px' heigth='60px'></td>";
                            }
                        echo "</tr>";
                    }
                }

                if($mododejuego === "Normal"){
                    echo "<tr>";
                    echo "<td></td>";
                        for($a = 0; $a < $tableronormal; $a++){
                            echo "<td>$letras[$a]</td>";
                        }
                    echo "</tr>";

                    for($m = 1; $m <= $tableronormal; $m++){
                        echo "<tr>";
                        echo "<td><h3>$m</h3></td>";
                            for($t = 1; $t <= $tableronormal; $t++){
                                echo "<td><img src='./barco.jpg' width='60px' heigth='60px'></td>";
                            }
                        echo "</tr>";
                    }
                }

                if($mododejuego === "Difícil"){
                    echo "<tr>";
                    echo "<td></td>";
                        for($a = 0; $a < $tablerodifícil; $a++){
                            echo "<td>$letras[$a]</td>";
                        }
                    echo "</tr>";

                    for($m = 1; $m <= $tablerodifícil; $m++){
                        echo "<tr>";
                        echo "<td><h3>$m</h3></td>";
                            for($t = 1; $t <= $tablerodifícil; $t++){
                                echo "<td><img src='./barco.jpg' width='60px' heigth='60px'></td>";
                            }
                        echo "</tr>";
                    }
                }
            ?> 
        </body>
    </table>
    <form action="Juego.php" method="$_POST">
        <label>
            <br><br>
            <!--<input type="text" name="letra" value="Letra" required>
            <input type="number" name="numero" value="numero" min= "10" max="10" required>-->
            <input type="submit" value="Restablecer">
        </label>
    </form>
</body>
</html>