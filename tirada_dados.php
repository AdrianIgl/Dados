<?php
echo '<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>MENU</title>
    <link rel="stylesheet" type="text/css" href="stylesmenu.css">
</head>
<body>
    <div id="menu">
        <h1>Menu</h1>
        <div class = "barra">
            <ul>
            <li><a href="../privado1/tirada_dados.php">TIRADA ALEATORIA</a></li>
            <li><a href="../privado2/sumar_7.php">SUMAR NUMERO 7</a></li>
            <li><a href="../privado3/par_impar.php">PAR/IMPAR</a></li>
            <li><a href="../acerca_de.php">ACERCA DE</a></li>
            </ul>
        </div>
    </div>

</body>
</html>';

for($i=0;$i<5;$i++)
{
    $numero=rand(1,6);
    switch($numero){
        case 1: echo '<img src="../img/uno.jpg" alt="uno" width="150" heigth="150" >';break;
        case 2: echo '<img src="../img/dos.jpg" alt="dos" width="150" heigth="150" >';break;
        case 3: echo '<img src="../img/tres.jpg" alt="tres"width="150" heigth="150"  >';break;
        case 4: echo '<img src="../img/cuatro.jpg" alt="cuatro" width="150" heigth="150" >';break;
        case 5: echo '<img src="../img/cinco.jpg" alt="cinco" width="150" heigth="150" >';break;
        case 6: echo '<img src="../img/seis.jpg" alt="seis" width="150" heigth="150" >';break;
    }
}
?>