<html>
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 1</title>
</head>
<body>
    <a href="ej1.php?color=red">Rojo</a><br>
    <a href="ej1.php?color=blue">Azul</a><br>
    <a href="ej1.php?color=green">Verde</a><br><br>
</body>
</html>

<?php
    if(isset($_GET["color"])){
        setColor($_GET["color"]);
        echo "<a href=\"ej1.2.php\">Segunda página</a><br>";
    }

    function setColor($color){
        setcookie("color", $color);
    }
?>
