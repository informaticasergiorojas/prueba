<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Vamos a crear una tabla de 2*2 -->
    <table border=1>
        <tr>
            <td> 1.1 </td>
            <td> 1.2 </td>
            <td> 1.3 </td>
        </tr>
        <tr>
            <td> 2.1 </td>
            <td> 2.2 </td>
            <td> 2.3 </td>
        </tr>
        <tr>
            <td> 3.1 </td>
            <td> 3.2 </td>
            <td> 3.3 </td>
        </tr>
    </table>
    <br><br>
    <form action="" method="POST" >
        <label>Filas: </label><input type="number"  name="filas" min="0" max="20">
        <label>Columnas: </label><input type="number" name="columnas">
        <input type="submit" name="tablita">
    </form>
    <br><br>

    <?php

        if(isset($_POST["tablita"])){       //detiene el programa a la espera del botón
            echo "Nos vinimos arriba e hicimos hasta bucles!! ";
            $n=$_POST["filas"];   //filas
            $m=$_POST["columnas"];   //columnas
           


            echo "<table border=1>";
            for ($i=1; $i <= $n; $i++) {     //Este bucle pinta las filas
            
                echo "<tr>"; 

                        for ($j=1; $j <= $m; $j++) {  //Este bucle pinta las celdas o columnas

                        echo "<td> $i.$j </td>"; 
                        }
                echo "</tr>";

            }
            echo "</table>";
        }
    ?>
</body>
</html>