
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
            //letras que pueden aparecer en la parte de arriba de la tabla
            $letras=["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M"];
            $ModoDeJuego;
            $vidas;
            //cantidad de cuadros y vidas que obtienes en base a la dificultad
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
            //imprime la cantidad de vidas
             for($i = 1; $i <= $vidas; $i++){
                    echo "<img src='./vidas.png' width='20px' height='20px'>";
                }
        ?>
        </h2>
        <?php
            $tabla="<img src='./mar.jpg' width='60px' heigth='60px'></td>";
            $matriz=[];
            for ($i=0; $i < $ModoDeJuego; $i++) { 
                for($o=0; $o < $ModoDeJuego; $o++)
                $matriz[$i][$o]=$tabla;
            }
        ?>
        <table border="1">
            <body>
                <?php 
                    $t;
                    $m;
                    $tabla2;
                    echo "<tr>";
                    echo "<td></td>";
                        //imprime las letras que van a salir
                        for($a = 0; $a < $ModoDeJuego; $a++){
                            echo "<td>$letras[$a]</td>";
                        }
                    echo "</tr>";
                    //imprime los cuadros en los que se jugara
                    for($i = 0; $i < $ModoDeJuego; $i++){
                        echo "<tr>";
                            $g=$i+1;
                            echo "<td><h3>$g</h3></td>";
                            //coloca las imagenes
                            for($t = 0; $t < $ModoDeJuego; $t++){
                                echo "<td>".$matriz[$i][$t]."</td>";
                            }
                            echo "<br>";
                        echo "</tr>";
                    }
                    $posicionX=["A"=>0,
                        "B"=>1,
                        "C"=>2,
                        "D"=>3,
                        "E"=>4,
                        "F"=>5,
                        "G"=>6,
                        "H"=>7,
                        "I"=>8,
                        "J"=>9,
                        "K"=>10,
                        "L"=>11,           
                        "M"=>12,                
                    ];
                    $u=$posicionX[$_POST["Nombre"]];
                    $matriz[$_POST["Número"]][$u]="<img src=./mar_fallo.jpg>";
                ?> 
            </body>
        </table>
        <label>Posición X(Letra)
            <input type="text" name="Nombre">
        </label>
        <label>Posición Y(Número)
            <input type="number" name="Número">
        </label>
        <br>
        <input type="submit" value="Disparar!">
    </form>
    <?php
    ?>
</body>
</html>