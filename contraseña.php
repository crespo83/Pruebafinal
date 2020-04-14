<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    $mayus;
    $minus;
    $caracter;
    $numero;

    function formulario()
    {

        echo '<form method="POST" action="contraseña.php">

Seleciona los caracteres que quieres utilizar
<br />
<input type="checkbox" name="check1">A - Z
<br />
<input type="checkbox" name="check2">a - z
<br />
<input type="checkbox" name="check3">0-9
<br />
<input type="checkbox" name="check4">?!*-_.%$/
<br />
Numero de caracteres <input type="text" name="num" > 
<br />
<input type="submit" name="numeros" value="numeros"/>
</form>';
    }


    function Controlygenerarcontrasenya()
    {
    }


    function generarcontraseña()
    {
    }

    function seleccioncheck()
    {

        if (isset($_REQUEST['check1'])) {
        }

        if (isset($_REQUEST['check2'])) {
        }

        if (isset($_REQUEST['check3'])) {
        }

        if (isset($_REQUEST['check4'])) {
        }

        if (isset($_POST['numeros'])) {

            $n = $_POST['num'];
        }
    }



    if (!$_POST) {
        formulario();
        seleccioncheck();
    } else {
        if (isset($_POST['numeros'])) {

            echo "mario";
            $n = $_POST['num'];


            echo $n;

            seleccioncheck();
        }
    }

    ?>


</body>

</html>