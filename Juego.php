
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
            $letras=["A", "B", "C", "D", "E", "F", "G", "H", "I", "J"];
            $ModoDeJuego=10;
            $vidas=8;
             for($i = 1; $i <= $vidas; $i++){
                echo "<img src='./vidas.png' width='20px' height='20px'>";
            }
        ?>
        </h2>
        <?php
            $c=isset($_POST["historial"]);
            if($c=="TRUE"){
                
            }
            else{

            }
            $historial=array();
            $tabla="<img src='./mar.jpg' width='60px' heigth='60px'></td>";
            $matriz=[];
            for ($i=0; $i < $ModoDeJuego; $i++) { 
                for($o=0; $o < $ModoDeJuego; $o++)
                $matriz[$i][$o]=$tabla;
            }
        ?>
       
            <body>
                <?php 
                    $t;
                    $m;
                    $tabla2;
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
                    ];
                    $v=$_POST["Número"]-1;
                    $u=$posicionX[$_POST["Nombre"]];
                    $matriz[$v][$u]="<img src=./mar_fallo.jpg width=60 height=60>";
                    echo "</tr>";
                    echo "<input type=hidden name=historial value=$intento>";       
                ?> 
            </body>
        <label>Posición X(Letra)
            <input type="text" name="Nombre">
            
        </label>
        <label>Posición Y(Número)
            <input type="number" name="Número" min="1" max="10">
        </label>
        <br>
        <input type="submit" value="Disparar!">
        <?php
           
            echo "<table border=1>";
                echo "<tr>";
                echo "<td></td>";
                //imprime las letras que van a salir
                for($a = 0; $a < $ModoDeJuego; $a++){
                    echo "<td>$letras[$a]</td>";
                }
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
            echo "</table>";
        ?>
    </form>
</body>
</html>