<html>
<head>
	<title>mayorcito</title>
</head>
<body>

	<form method="post">

		<input type="number" name="numero1">
		<br><br>
		<input type="number" name="numero2">		
		<br><br>
		<input type="number" name="numero3">
		<br><br>
		<input type="submit" value="El Mayor" name="elMayor">
		
		<input type="submit" value="Sumando" name="suma"  >
	</form>



<?php 

//para validar si viene por primera vez: isset
//isset($_POST['mayor']);
//true instanciado, false no instanciado
var_dump($_POST);

if ( isset($_POST['elMayor']) ) {
	# code...


$n1=$_POST['numero1'];
$n2=$_POST['numero2'];
$n3=$_POST['numero3'];

echo "<br><br>";
	echo "El Mayor es: ";

	if ($n1 > $n2 && $n1 > $n3) {	echo $n1;}

	if ($n2 > $n1 && $n2 > $n3) {	echo $n2;}

	if ($n3 > $n1 && $n3 > $n2) {	echo $n3;}


}

if ( isset($_POST['suma']) ) {
	# code...


$n1=$_POST['numero1'];
$n2=$_POST['numero2'];
$n3=$_POST['numero3'];

echo "<br><br>";
	$nt= $n1+ $n2 + $n3;

	echo "<br>Suma: ".$nt;
	}
 ?>

</body>
</html>