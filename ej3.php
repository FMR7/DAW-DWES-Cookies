
<!DOCTYPE html>
<?php
	if(!isset($_GET["test"])){
		setcookie("testCookie", "testValue", time()+5);
		echo "Comprobando si es posible crear cookies...";
		header( "Refresh:2; url=ej3.php?test=true");
	}
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 3</title>
</head>
<body>
<?php
	if(isset($_GET["test"])){
		if(isset($_COOKIE["testCookie"])){
			echo "Se pueden crear cookies";
			setcookie("testCookie", "testValue", time()-1);
		}else{
			echo "No se pueden crear cookies";
		}
		echo "<br><a href=\"ej3.php\">Comprobar otra vez</a>";
	}
?>

</body>
</html>