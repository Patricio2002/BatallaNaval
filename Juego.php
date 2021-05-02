<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Batalla Naval</title>
</head>
<body>
    <form action="Juego.php" method="POST">
        <label>Dificultad del Juego
            <select name="opcion">
                <option value="facil"> facil</option>
                <option value="intermedio">intermedio</option>
                <option value="Dificil">Dificil</option>
            </select>
        </label>
        <input type="submit">
    </form>
    <br>
    <form action="Juego.php" method="POST">
        <label>
            Posición X(letra)<input type="text" name="letra" required>
        </label>
        <label>
            Posición Y(Número)<input type="number" name="numero"  min= "1" max="10" required>
        </label>
        <input type="submit">
    </form>
    <?php
        $tabla=0;
        if($_POST["opcion"]=="facil"){
            $tabla=8;
        }
        elseif($_POST["opcion"]=="intermedio"){
            $tabla=10;
        }
        else{
            $tabla=13;
        }
         $tiro=[[" "],
                ["A"=>1, "B"=>2, "C"=>3, "D"=>4, "E"=>5, "F"=>6, "G"=>7, "H"=>8, "I"=>9, "J"=>10],
                ["A"=>1, "B"=>2, "C"=>3, "D"=>4, "E"=>5, "F"=>6, "G"=>7, "H"=>8, "I"=>9, "J"=>10],
                ["A"=>1, "B"=>2, "C"=>3, "D"=>4, "E"=>5, "F"=>6, "G"=>7, "H"=>8, "I"=>9, "J"=>10],
                ["A"=>1, "B"=>2, "C"=>3, "D"=>4, "E"=>5, "F"=>6, "G"=>7, "H"=>8, "I"=>9, "J"=>10],
                ["A"=>1, "B"=>2, "C"=>3, "D"=>4, "E"=>5, "F"=>6, "G"=>7, "H"=>8, "I"=>9, "J"=>10],
                ["A"=>1, "B"=>2, "C"=>3, "D"=>4, "E"=>5, "F"=>6, "G"=>7, "H"=>8, "I"=>9, "J"=>10],
                ["A"=>1, "B"=>2, "C"=>3, "D"=>4, "E"=>5, "F"=>6, "G"=>7, "H"=>8, "I"=>9, "J"=>10],
                ["A"=>1, "B"=>2, "C"=>3, "D"=>4, "E"=>5, "F"=>6, "G"=>7, "H"=>8, "I"=>9, "J"=>10],
                ["A"=>1, "B"=>2, "C"=>3, "D"=>4, "E"=>5, "F"=>6, "G"=>7, "H"=>8, "I"=>9, "J"=>10]
            ];
            echo "<table border=1>";
                for ($i=0; $i < $tabla; $i++) { 
                    echo "<tr>";
                    for ($e=0; $e < $tabla; $e++) {
                        echo "<td width=20 height=20>#</td>";
                    }
                    echo "</tr>";
                    echo "<br>";
                }
            echo "</table>";
            
    ?>

</body>
</html>