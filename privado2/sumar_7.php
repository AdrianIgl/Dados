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
while ($suma != 7){
    $dado1 = rand(1,6);
    $dado2 = rand(1,6);
    $suma = $dado1 + $dado2;
    $contador++;
}

switch ($dado1){
    case 1:
        echo '<img src="../img/uno.jpg" alt="Uno" width="150" height="150">';
        break;
    case 2:
        echo '<img src="../img/dos.jpg" alt="Dos" width="150" height="150">';
        break;
    case 3:
        echo '<img src="../img/tres.jpg" alt="Tres" width="150" height="150">';
        break;
    case 4:
        echo '<img src="../img/cuatro.jpg" alt="Cuatro" width="150" height="150">';
        break;
    case 5:
        echo '<img src="../img/cinco.jpg" alt="Cinco" width="150" height="150">';
        break;
    case 6:
        echo '<img src="../img/seis.jpg" alt="Seis" width="150" height="150">';
        break;
}

switch ($dado2){
    case 1:
        echo '<img src="../img/uno.jpg" alt="Uno" width="150" height="150">';
        break;
    case 2:
        echo '<img src="../img/dos.jpg" alt="Dos" width="150" height="150">';
        break;
    case 3:
        echo '<img src="../img/tres.jpg" alt="Tres" width="150" height="150">';
        break;
    case 4:
        echo '<img src="../img/cuatro.jpg" alt="Cuatro" width="150" height="150">';
        break;
    case 5:
        echo '<img src="../img/cinco.jpg" alt="Cinco" width="150" height="150">';
        break;
    case 6:
        echo '<img src="../img/seis.jpg" alt="Seis" width="150" height="150">';
        break;
}

echo '<br><h2>Número de Intentos: '. $contador . '</h2>';
?>