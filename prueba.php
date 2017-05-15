<?php 



$name= $_POST["name"];
$email= $_POST["email"];
$password = $_POST["password"];

if ($name && $email && $password) {





mysql_connect("localhost","root","") or die("No se ha podido conectar");
mysql_select_db("nueva");
mysql_query("insert INTO usuarios (nombre,email,password) VALUES ('$name','$email','$password')");


$registro= mysql_affected_rows();

echo $registro." nueva linea ha sido afectada";





}


else

{

echo "por favor completa el formulario";

}

mysql_close();

 ?>


