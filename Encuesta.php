<!DOCTYPE html>
<html lang="e">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encuesta Sergio Rojas Rojas</title>
</head>
<body>
<form action="" method="POST">
            <label>Nombre: </label><input type ="text" name ="nombre">
            <br><br>
            <label>Apellido: </label><input type ="text" name ="apellido">
            <br><br>
            <label>Edad: </label><input type ="number" name ="edad" min=0 max=120>
            <br><br>
            <input type="submit"    name ="comprobar">

        </form>
        <br>
        <?php
        //determina si una persona puede o no votar, si es mayor de edad vota
        if(isset($_POST["comprobar"])){       //detiene el programa a la espera del botón

        $nombre=$_POST["nombre"];   // Trae el valor escrito en la caja de texto
        $apellido=$_POST["apellido"];
        $edad=$_POST["edad"];
        if ($edad<>"") {    //verifica que la caja de texto no esté vacía
            
        

        if ($edad>=18){
            echo " Bienvenido $nombre $apellido  eres ya un pureta que puede votar";

        }else{

            echo " Lo sentimos $nombre $apellido  no puedes votar por ser un chiquillo todavía, cumple los 18 años HAZME EL FAVOR";
        }
        }else{
            echo "HAZME EL FAVOR  AMIGO DE NO DEJAR VACÍA LA CAJA DE TEXTO";
        }
    }

        ?>
    
</body>
</html>