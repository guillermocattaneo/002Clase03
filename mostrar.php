<!--
<h1> Llego </h1>
-->
<?php 

//echo "lalala";

echo "<h1> Llego </h1>";
//Super variables "$_POST" o "$_GET" son arrays, vemos sus contenidos con arrays

echo "Post <br>";
var_dump($_POST);
echo "<br><br>";

echo "Get <br>";
var_dump($_GET);	//tiene todo publico, se ve en la barra de direccion.
echo "<br><br>";


$nombre = $_POST['usuario'];
echo "Benvenutto: " . $nombre;
$contrasena = $_POST['clave'];
echo ", tu clave esta segura aca (aunque sea): <h2>" . $contrasena."</h2> ;-)";

if ($nombre=="admin" && $contrasena="1234") {
	include "bienvenido.html";

}else
{
	include "noLogeado.html";

}

 ?>
