
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
    <form action="Juego.php" method="POST">
        <h2>Vidas: 
        <?php
            $letras=["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M"];
            $ModoDeJuego=10;
            $vidas=8;
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
                    $v=$_POST["Número"]-1;
                    $u=$posicionX[$_POST["Nombre"]];
                    $matriz[$v][$u]="<img src=./mar_fallo.jpg width=60 height=60>";
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